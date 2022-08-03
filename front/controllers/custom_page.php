<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    require_once 'vendor/autoload.php';
class Custom_page extends MY_Controller {
    public $class_name;
    public $api;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->load->model('custom_page_model');
        
    }

    
    public function index($slug) {
        
        $template_path = $this->pagewisecontent($slug);
        $data = $this->data;
      
        $data['view_path'] = "custom/$slug"; 
        $data['page_heading'] = $data['page_items']->page_title;
        $data['breadcrumb'] = '<b><a href="" class="thm-text">BACK TO HOME</a></b> ';
        $data['scripts'] = array('assets/javascripts/custom_page.js');
        $this->load->view($template_path, $data);
    
    }

    public function connect_save(){
        $this->custom_page_model->data = $this->input->post();
        $this->custom_page_model->data['service_slot'] = implode(',',$this->input->post('service_slot'));
      
        $res = $this->custom_page_model->insert('connect');
        if(!empty($res) && $res == true ){
            $result = 1;
        }else{
            $result = 0;
        }
        echo json_encode(($result));
    }
    
   
}