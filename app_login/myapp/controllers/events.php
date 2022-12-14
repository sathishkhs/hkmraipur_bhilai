<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Events extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('events_model');
		$user_id = $this->session->userdata('user_id');
		if (empty($user_id)) {
			redirect('');
		}
	}

	public function index(){
		$data['query'] = $this->events_model->view_data('events');
		$data['view'] = 'events/events_list';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Events List';
		$data['breadcrumb'] = 'Events List';
		$data['scripts'] = array('assets/javascripts/events.js');
		$this->load->view('templates/dashboard', $data);
	}

	public function events_list(){
        $draw = $this->input->post('draw');
		$start = $this->input->post('start');
		$length = $this->input->post('length');
        $events = $this->events_model-> pagination('events');
        $data = array();

		foreach ($events->result() as $row) {
			$status = (!empty($row->status_ind) && ($row->status_ind == 1)) ? "<i class='fa fa-check-circle text-success'>Active</i> &nbsp;&nbsp;" : "<i class='nav-icon fa  fa-times-circle text-danger' >Inactive</i>";
			$data[] = array(
                $row->event_name,
                $row->event_description,
                $row->start_date_time,
				$row->end_date_time,
				$status,
				'
				<td><div class="action-buttons">
				<a class="" title="Edit" href="events/events_edit/' . $row->event_id . '">
				<button class="btn btn-primary btn-small btn-xs"><i class="fa fa-edit"></i></button></a>&nbsp;
				<a class="red" title="Delete" href="events/events_delete/' . $row->event_id . '"> 
				<button class="btn btn-danger btn-small btn-xs"><i class="fa fa-trash"></i></button></a>&nbsp;
				</div></td>
				'

			);
		}

        $output = array(
			"draw" => $draw,
			"recordsTotal" => $events->num_rows(),
			"recordsFiltered" => $events->num_rows(),
			"data" => $data

		);
		echo json_encode($output);
		exit;

    }

    public function events_add(){
		$data['seva_categories'] = $this->events_model->view_data('seva_category');
		$data['view'] = 'events/events_form';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Events Form';
		$data['breadcrumb'] = 'Events Form';
		$data['scripts'] = array('assets/javascripts/events.js');
		$this->load->view('templates/dashboard', $data);
    }
    public function events_edit($event_id){
		$data['seva_categories'] = $this->events_model->view_data('seva_category');
        $this->events_model->primary_key = array('event_id'=>$event_id);
        $data['query'] = $this->events_model->get_row('events');
		$data['view'] = 'events/events_form';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Events Form';
		$data['breadcrumb'] = 'Events Form';
		$data['scripts'] = array('assets/javascripts/events.js');
		$this->load->view('templates/dashboard', $data);
    }

	public function events_save()
	 {
		 $event_id = $this->input->post('event_id');
		 $this->events_model->data = $this->input->post();
		 $start_date_time = explode('T',$this->input->post('start_date_time'));
		 $end_date_time = explode('T',$this->input->post('end_date_time'));
		 $this->events_model->data['start_date'] = date('Y F d',strtotime($start_date_time[0]));
		 $this->events_model->data['start_time'] = date('h:i A', strtotime($start_date_time[1]));
		 $this->events_model->data['end_date'] = date('Y F d',strtotime($end_date_time[0]));
		 $this->events_model->data['end_time'] = date('h:i A', strtotime($end_date_time[1]));
		
		 if (!empty($event_id)) {
			 
			
			 $this->events_model->primary_key = array('event_id' => $event_id);
			 if ($this->events_model->update('events')) {
				 $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Updated Successfully');
			 } else {
				 $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Update Record.');
			 }
		 } else {
			 unset($this->events_model->data['event_id']);
			
			 $this->events_model->data['added_date'] = date('Y-m-d h:i:s');
			 if ($this->events_model->insert('events')) {
				 $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Added Successfully');
			 } else {
				 $data['query'] = (object) $this->input->events();
				 $data['view'] = "events/events_form";
				 $data['title'] = 'Administrator Dashboard';
				 $data['page_heading'] = 'Add/Edit seva';
				 $data['breadcrumb'] = "Add/Edit seva";
				 $data['scripts'] = array('assets/javascripts/' . 'events.js');
				 $this->load->view('templates/dashboard', $data);
				 $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Add Record.');
			 }
		 }
 
		 $this->session->set_flashdata('msg', $msg);
		 redirect("events");
	 }

	 public function events_delete($event_id){
		$this->events_model->primary_key = array('event_id'=>$event_id);
		$this->events_model->delete('events');
		redirect('events');
	 }

	 public function vaishnava_calendar(){
		$data['query'] = $this->events_model->view_data('vaishnava_calendar');
		$data['view'] = 'events/vaishnava_calendar_list';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Vaishnava Calendar List';
		$data['breadcrumb'] = 'Vaishnava Calendar List';
		$data['scripts'] = array('assets/javascripts/events.js');
		$this->load->view('templates/dashboard', $data);
	 }


	 public function vaishnava_calendar_list(){
        $draw = $this->input->post('draw');
		$start = $this->input->post('start');
		$length = $this->input->post('length');
        $events = $this->events_model-> pagination('vaishnava_calendar');
        $data = array();

		foreach ($events->result() as $row) {
			$status = (!empty($row->status_ind) && ($row->status_ind == 1)) ? "<i class='fa fa-check-circle text-success'>Active</i> &nbsp;&nbsp;" : "<i class='nav-icon fa  fa-times-circle text-danger' >Inactive</i>";
			$data[] = array(
                $row->title,
                $row->start_date,
				!empty($row->end_date) ? $row->end_date : '',
				!empty($row->url) ? $row->url : '' ,
				'
				<td><div class="action-buttons">
				<a class="" title="Edit" href="events/vaishnava_calendar_edit/' . $row->id . '">
				<button class="btn btn-primary btn-small btn-xs"><i class="fa fa-edit"></i></button></a>&nbsp;
				<a class="red" title="Delete" href="events/vaishnava_calendar_delete/' . $row->id . '"> 
				<button class="btn btn-danger btn-small btn-xs"><i class="fa fa-trash"></i></button></a>&nbsp;
				</div></td>
				'

			);
		}

        $output = array(
			"draw" => $draw,
			"recordsTotal" => $events->num_rows(),
			"recordsFiltered" => $events->num_rows(),
			"data" => $data

		);
		echo json_encode($output);
		exit;

    }

	public function vaishnava_calendar_add(){
	
		$data['view'] = 'events/vaishnava_calendar_form';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Vaishnava Calendar Form';
		$data['breadcrumb'] = 'Vaishnava Calendar Form';
		$data['scripts'] = array('assets/javascripts/events.js');
		$this->load->view('templates/dashboard', $data);
	}


    public function vaishnava_calendar_edit($id){
	
        $this->events_model->primary_key = array('id'=>$id);
        $data['query'] = $this->events_model->get_row('vaishnava_calendar');
		$data['view'] = 'events/vaishnava_calendar_form';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Vaishnava Calendar Form';
		$data['breadcrumb'] = 'Vaishnava Calendar Form';
		$data['scripts'] = array('assets/javascripts/events.js');
		$this->load->view('templates/dashboard', $data);
    }

	public function vaishnava_calendar_save()
	 {
		 $id = $this->input->post('id');
		 $this->events_model->data = $this->input->post();
		 $this->events_model->data['start_date'] =  $this->input->post('start_date');
		 $this->events_model->data['end_date'] = !empty($this->input->post('end_date')) ? $this->input->post('end_date') : '';
	
		//  $this->events_model->data['start_date'] = date('Y F d',strtotime($start_date_time[0]));
		//  $this->events_model->data['start_time'] = date('h:i A', strtotime($start_date_time[1]));
		//  $this->events_model->data['end_date'] = date('Y F d',strtotime($end_date_time[0]));
		//  $this->events_model->data['end_time'] = date('h:i A', strtotime($end_date_time[1]));
		
		 if (!empty($id)) {
			 
			 $this->events_model->primary_key = array('id' => $id);
			 if ($this->events_model->update('vaishnava_calendar')) {
				 $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Updated Successfully');
			 } else {
				 $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Update Record.');
			 }
		 } else {
			 unset($this->events_model->data['id']);
			
			
			 if ($this->events_model->insert('vaishnava_calendar')) {
				 $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Added Successfully');
			 } else {
				 $data['query'] = (object) $this->input->post('vaishnava_calendar');
				 $data['view'] = "events/vaishnava_calendar_form";
				 $data['title'] = 'Administrator Dashboard';
				 $data['page_heading'] = 'Add/Edit Vaishnava Calendar';
				 $data['breadcrumb'] = "Add/Edit Vaishnava Calendar";
				 $data['scripts'] = array('assets/javascripts/' . 'events.js');
				 $this->load->view('templates/dashboard', $data);
				 $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Add Record.');
			 }
		 }
 
		 $this->session->set_flashdata('msg', $msg);
		 redirect("events/vaishnava_calendar");
	 }

	 public function vaishnava_calendar_delete($id){
		$this->events_model->primary_key = array('id'=>$id);
		$this->events_model->delete('vaishnava_calendar');
		redirect('events/vaishnava_calendar');
	 }
}