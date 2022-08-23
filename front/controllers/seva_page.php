<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    require_once 'vendor/autoload.php';
    use Razorpay\Api\Api;
class Seva_Page extends MY_Controller {
    public $class_name;
    public $api;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
       $this->load->config('razorpay-config');
      
       
        $this->load->model('festivals_model');
    }

   
    public function index($slug) {
        $data = file_get_contents("php://input"); 
        $data = json_decode($data,true); 
        print_r($data);
        if (!empty($this->input->post())) {

            $template_path = $this->sevaspagewisecontent($slug);
            $data = $this->data;
            $data['slug'] = $slug;
            $data['table_name'] = $table_name = $this->input->post('table_name');

            $data['keyId'] = $keyId = $this->config->item('keyId');
            $this->seva_page_model->data['festival'] = $data['festival'] = $festival = $this->input->post('festival');
            $this->seva_page_model->data['seva_name'] = $data['seva_name'] = $seva_name = $this->input->post('seva_name');
            $this->seva_page_model->data['full_name'] = $data['full_name'] = $full_name = $this->input->post('full_name');
            $this->seva_page_model->data['phone_number'] = $data['phone_number'] = $phone_number = $this->input->post('phone_number');
            $this->seva_page_model->data['email'] = $data['email'] = $email = $this->input->post('email');
            $this->seva_page_model->data['pan_number'] = $data['pan_number'] = $pan_number = $this->input->post('pan_number');
            $this->seva_page_model->data['city'] = $data['city'] = $city = $this->input->post('city');
            $this->seva_page_model->data['amount'] = $data['amount'] = $amount = $this->input->post('amount');
            $this->seva_page_model->data['payment_date'] = $data['payment_date'] = $payment_date = date('Y-m-d h:i:s');
            $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $generated_key = substr(str_shuffle($str_result), 0, 4);
            $this->seva_page_model->data['receipt'] = $receipt = $generated_key . '_' . rand('00000000', '9999999999');
            $insert_id = $this->seva_page_model->insert($table_name);

            // print_r($insert_id);exit;
            $order_data = [
                'receipt'         => $receipt,
                'amount'          => $amount * 100, // 39900 rupees in paise
                'currency'        => 'INR',
                'payment' => [
                    "capture" => "automatic",
                    'capture_options' => array('automatic_expiry_period' => 12, 'manual_expiry_period' => 7200, 'refund_speed' => 'normal')
                ],
                'notes'           => [
                    'name'  => $full_name,
                    'phone_number' => $phone_number,
                    'email' => $email,
                    'pan_number' => $pan_number,
                    'city' => $city,
                    'payment_date' => $payment_date,
                    'receipt' => $receipt,
                    'seva_name' => $seva_name,
                    'insert_id' => $insert_id,
                    'festival' => $festival
                ]

            ];
            $api = new Api($this->config->item('keyId'), $this->config->item('keySecret'));
            $razorpayOrder = $api->order->create($order_data);
            // print_r($razorpayOrder['id']);exit;

            $this->seva_page_model->data['order_id'] = $data['order_id'] = $order_id = $razorpayOrder['id'];
            $this->seva_page_model->data['razorpay_order_id'] = $data['razorpay_order_id'] = $razorpay_order_id = $razorpayOrder['id'];
            $this->seva_page_model->data['entity'] = $data['entity'] = $entity = $razorpayOrder['entity'];
            $this->seva_page_model->data['status'] = $data['status'] = $status = $razorpayOrder['status'];
            $this->seva_page_model->data['created_at'] = $data['created_at'] = $created_at = $razorpayOrder['created_at'];

            $this->seva_page_model->primary_key = array('id' => $insert_id);
            $this->seva_page_model->update($table_name);

            if(!empty($data['page_items']->gallery_id)){            
                $this->seva_page_model->primary_key = array('gallery_id'=>$data['page_items']->gallery_id);
                $data['gallery'] = $this->seva_page_model->limit_gallery('gallery_images');
            }
            $data['insert_id'] = $insert_id;
            $data['scripts'] = array('assets/javascripts/seva_page.js');
            $this->load->view($template_path, $data);
        } else {
            $template_path = $this->sevaspagewisecontent($slug);
            $data = $this->data;
            if(!empty($data['page_items']->gallery_id)){
            $this->seva_page_model->primary_key = array('gallery_id'=>$data['page_items']->gallery_id);
            $data['gallery'] = $this->seva_page_model->limit_gallery('gallery_images');
            }
            $data['page_heading'] = 'Seva Page';
            $data['breadcrumb'] = '<span><a href="">Home</a> - </span> <span><a href="'.$this->class_name .'">'.ucfirst($this->class_name).'</a> - </span>Seva Page';
            $data['scripts'] = array('assets/javascripts/seva_page.js');
            $this->load->view($template_path, $data);
        }
    
    }
    public function save_payment($insert_id, $table_name)
    {

        $this->seva_page_model->primary_key = array('id' => $insert_id);
        $payment_data = $this->seva_page_model->row_data($table_name);
        $this->seva_page_model->primary_key = array('page_slug' => $payment_data->festival);
        $festival_data = $this->seva_page_model->row_data('sevas_page');
        // $this->seva_page_model->primary_key = array('sevas_page_id' => $festival_data->sevas_page_id, 'seva_name' => $payment_data->seva_name);
        // $seva_data = $this->seva_page_model->row_data('sevas');

        if (!empty($this->input->post('error'))) {
            $this->seva_page_model->data['error_code'] = $this->input->post('error')['code'];
            $this->seva_page_model->data['error_description'] = $this->input->post('error')['description'];
            $this->seva_page_model->data['reason'] = $this->input->post('error')['reason'];
            $this->seva_page_model->data['razorpay_payment_id'] = $razorpay_payment_id =  json_decode($this->input->post('error')['metadata'])->payment_id;
            $this->seva_page_model->data['status'] = 'failed';
        } else {
            $this->seva_page_model->data['razorpay_payment_id'] = $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $this->seva_page_model->data['status'] = 'success';
        }
        $this->seva_page_model->primary_key = array('id' => $insert_id);
        $this->seva_page_model->update($table_name);

        if (!empty($this->input->post('error'))) {
            $this->sendmail($payment_data->email, $payment_data->name, $payment_data->amount, $payment_data->razorpay_order_id, 0);
            $this->session->set_flashdata('amount', $payment_data->amount);
            $this->session->set_flashdata('name', $payment_data->full_name);
            redirect($this->class_name . "/donation_failed/$insert_id");
        } else {
            $this->sendmail($payment_data->email, $payment_data->full_name, $payment_data->amount, $payment_data->razorpay_order_id, 1);

          
            $this->session->set_flashdata('order_id', $razorpay_payment_id);
            $this->session->set_flashdata('razorpay_payment_id', $razorpay_payment_id);
            $this->session->set_flashdata('amount', $payment_data->amount);
            $this->session->set_flashdata('name', $payment_data->full_name);
            redirect($this->class_name . "/donation_success/$insert_id");
        }
    }

    public function sendmail($to_mail, $name, $amount, $receipt, $status)
    {


        $config['protocol']    = 'mail';
        $config['smtp_host']    = 'mail.hkm-mandir.org';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '30';
        $config['smtp_user']    = 'admin@hkm-mandir.org';
        $config['smtp_pass']    = '@ksh@y@ch@it@ny@123';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        // $config['smtp_crypto'] = 'ssl';
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        $config['wordwrap'] = TRUE; // bool whether to validate email or not 

        $this->load->library('email', $config);
        $this->email->set_mailtype("html");
        $this->email->from('admin@hkm-mandir.org', 'Harekrishna Mandir');
        $this->email->to($to_mail);

        if ($status == 1) {
            $this->seva_page_model->primary_key = array('template_id' => 1);
            $template = $this->seva_page_model->row_data('email_templates');
            $data['name'] = $name;
            $data['amount'] = $amount;
            $this->email->subject($template->template_title);
            // $message = $template->template_content;
            $message = str_replace('####NAME####', $name, $template->template_content);
            $message = str_replace('####RECEIPT####', $receipt, $message);
        } elseif ($status == 0) {
            $this->seva_page_model->primary_key = array('template_id' => 2);
            $template = $this->seva_page_model->row_data('email_templates');
            $data['name'] = $name;
            $data['amount'] = $amount;
            $this->email->subject($template->template_title);
            // $message = $template->template_content;

            $message = str_replace('####NAME####', $name, $template->template_content);
            $message = str_replace('####RECEIPT####', $receipt, $message);
            // $message = $this->load->view('email_templates/failed.php',$data,true);
        }


        $this->email->message($message);

        $q = $this->email->send();
    }
    public function donation_success($insert_id)
    {
        $data = $this->data;
        $this->festivals_model->primary_key = array('page_slug' => 'success-donation');
        $data['page_items'] = $this->festivals_model->row_data('pages');
        $this->festivals_model->data['razorpay_payment_id'] = $razorpay_payment_id = $this->input->post('razorpay_payment_id');
        $this->festivals_model->data['razorpay_signature'] = $razorpay_signature = $this->input->post('razorpay_signature');
        $this->festivals_model->data['status'] = 'Success';
        $this->festivals_model->primary_key = array('id' => $insert_id);
        if ($this->config->item('payment_mode') == 'test') {
            $this->festivals_model->update('test_payments');
            $this->festivals_model->primary_key = array('id' => $insert_id);
            $data['payment_data'] = $payment_data =  $this->festivals_model->row_data('test_payments');
        } else {
            $this->festivals_model->update('payments');
            $this->festivals_model->primary_key = array('id' => $insert_id);
            $data['payment_data'] = $payment_data =  $this->festivals_model->row_data('payments');
        }
        $api = new Api($this->config->item('keyId'), $this->config->item('keySecret'));
        $rzp = $api->payment->fetch($data['payment_data']->razorpay_payment_id);
        if ($rzp->status != 'captured') {
            $api = new Api($this->config->item('keyId'), $this->config->item('keySecret'));
            $rzp = $api->payment->fetch($data['payment_data']->razorpay_payment_id)->capture(array('amount' => $data['payment_data']->amount, 'currency' => $data['payment_data']->currency));
        }

        // }
        $data['seva_name'] = $data['payment_data']->seva_name;
        $data['slug'] = $data['payment_data']->festival;

        $data['javascripts'] = 'templates/includes/festivals/scripts';
        $data['view_path'] = $this->class_name . '/donation_success';
        $data['scripts'] = array('javascripts/' . $this->class_name . '.js', 'javascripts/dashboard.js');
        $this->load->view('templates/festivals_page', $data);
    }
    public function donation_failed($insert_id)
    {
        $data = $this->data;
        $this->festivals_model->primary_key = array('page_slug' => 'failed-donation');
        $data['page_items'] = $this->festivals_model->row_data('pages');

        $this->festivals_model->data['error_code'] = $error_code = $this->input->post('error_code');
        $this->festivals_model->data['error_description'] = $error_description = $this->input->post('error_description');
        $this->festivals_model->data['error_source'] = $error_source = $this->input->post('error_source');
        $this->festivals_model->data['error_reason'] = $error_reason = $this->input->post('error_reason');
        $this->festivals_model->data['razorpay_payment_id'] = $razorpay_payment_id = $this->input->post('razorpay_payment_id');
        $razorpay_order_id = $this->input->post('razorpay_order_id');
        $this->festivals_model->data['status'] = $status = 'Failed';
        $this->festivals_model->primary_key = array('id' => $insert_id);
        if ($this->config->item('payment_mode') == 'test') {
            $this->festivals_model->update('test_payments');
            $this->festivals_model->primary_key = array('id' => $insert_id);
            $data['payment_data'] = $this->festivals_model->row_data('test_payments');
        } else {
            $this->festivals_model->update('payments');
            $this->festivals_model->primary_key = array('id' => $insert_id);
            $data['payment_data'] = $this->festivals_model->row_data('payments');
        }

        $data['slug'] = $data['payment_data']->festival;


        $data['javascripts'] = 'templates/includes/festivals/scripts';
        $data['view_path'] = $this->class_name . '_new/donation_failed';
        $data['scripts'] = array('javascripts/' . $this->class_name . '.js', 'javascripts/dashboard.js');
        $this->load->view('templates/festivals_page', $data);
    }

    public function save_donation(){
        $this->seva_page_model->data['full_name'] = $full_name = $this->input->post('full_name');
        $this->seva_page_model->data['phone_number'] = $phone_number = $this->input->post('phone_number');
        $this->seva_page_model->data['email'] = $email = $this->input->post('email');
        $this->seva_page_model->data['pan_number'] = $pan_number = $this->input->post('pan_number');
        $this->seva_page_model->data['city'] = $city = $this->input->post('city');
        $this->seva_page_model->data['amount'] = $amount = $this->input->post('amount');
        $this->seva_page_model->data['seva_name'] = $seva_name = $this->input->post('seva_name');
        
        $response = json_decode($this->instamojo_Authentication());
        $this->seva_page_model->data['access_token'] = $seva_name = $this->input->post('access_token');
      
     
    //   print_R($response->access_token);exit;
      
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/v2/payment_requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Authorization: Bearer '.$response->access_token.''));

        $payload = Array(
            'purpose' => $seva_name,
            'amount' => $amount,
            'buyer_name' => $full_name,
            'email' => $email,
            'phone' => $phone_number,
            'redirect_url' => "http://6ae0-2405-201-c035-b0be-3413-a62-6151-4aca.ngrok.io/neat_ci/seva_page/thank_you/$response->access_token/",
            'send_email' => 'True',
            'send_sms' => 'True',
            'webhook' => ' http://6ae0-2405-201-c035-b0be-3413-a62-6151-4aca.ngrok.io/neat_ci/seva_page/webhook',
            'allow_repeated_payments' => 'False',
        );
    
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $create_payment_request = curl_exec($ch);
        curl_close($ch);  
        $payment_request = json_decode($create_payment_request);
        if($this->seva_page_model->insert('seva_offerings')){
            header("Location: $payment_request->longurl");
            exit;
        }
      
        

    }


    public function instamojo_Authentication(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/oauth2/token/');     
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

        $payload = Array(
            'grant_type' => 'client_credentials',
            'client_id' => INSTAMOO_CLIENT_ID,
            'client_secret' => INSTAMOO_SECRET_KEY
        );

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch); 

        return $response;
    }

    public function thank_you($access_token){
        $this->seva_page_model->data['payment_id'] = $payment_id = $this->input->get('payment_id');
        $this->seva_page_model->data['payment_status'] = $payment_status = $this->input->get('payment_status');
        $this->seva_page_model->data['payment_request_id'] = $payment_request_id = $this->input->get('payment_request_id');
        $this->seva_page_model->primary_key = array('access_token'=>$access_token);
        print_R($access_token);
        }
}