<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Index extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->load->model('index_model');
    }
    public function index($slug = 'home') {
        $data = $this->data;
        $data['events'] =  $this->index_model->view_data('events'); 
        $data['scripts'] = array('assets/javascripts/index.js');
        $this->load->view('templates/home', $data);
    }

    public function contact_us(){
        $data = $this->data;
        $data['view'] = 'index/contact_us';
        $data['scripts'] = array('assets/javascripts/index.js'); 
        $this->load->view('templates/home', $data);
    }

    public function event($id){
       
        $data = $this->data;
        $this->index_model->primary_key = array('event_id'=>$id);
        $data['event'] = $this->index_model->get_row_data('events');
        $data['view_path'] = 'events/event_page';
        $data['scripts'] = array('assets/javascripts/index.js'); 
        $this->load->view('templates/inner_page', $data);
    }
}
?>