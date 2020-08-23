<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Membertype extends CI_Controller {



	public $membertype;


	/**
	 * Get All insert_data from this method.
	 *
	 * @return Response
	*/
	public function __construct() {
	   parent::__construct(); 
 
 
	   $this->load->library('form_validation');
	   $this->load->library('session');
	   $this->load->model('Membertype_model');
 
 
	   $this->membertype = new Membertype_model;
	}
 
 
	/**
	 * Display insert_data this method.
	 *
	 * @return Response
	*/
	public function index()
	{
		$data['membertypes'] = $this->membertype->get_membertype();
 	  
		$this->load->view('membertype/index',$data);
	   
	}
 
 
	/**
	 * Show Details this method.
	 *
	 * @return Response
	*/
	public function show($id)
	{
	   $membertype__data = $this->membertype->find_membertype($id);
 
	   $this->load->view('membertype/show',array('membertype_insert_data'=>$membertype_data));
	  
	}
 
 
	/**
	 * Create from display on this method.
	 *
	 * @return Response
	*/
	public function create()
	{
	   
	   $this->load->view('membertype/create');
	   
	}
 
 
	/**
	 * Store insert_data from this method.
	 *
	 * @return Response
	*/
	public function store()
	{
		$insert_data = array(
			'membertype' => $this->input->post('membertype' ,TRUE),
			'description' =>$this->input->post('description',TRUE),	  
	);
		 $this->form_validation->set_rules('membertype', 'Name', 'required');
		 $this->form_validation->set_rules('description', 'Description', 'required');
 
 
		 if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error_flashData', 'error.');
			 redirect(base_url('membertype/create'));
		 }else{
			$this->membertype->insert_membertype($insert_data);
			redirect(base_url('membertype/index'));
		 }
	 }
 
 
	/**
	 * Edit insert_data from this method.
	 *
	 * @return Response
	*/
	public function edit($id)
	{
		$data = $this->membertype->find_membertype($id);
  
		$this->load->view('membertype/edit',array('membertype'=>$data));
	   
	}
 
 
	/**
	 * Update insert_data from this method.
	 *
	 * @return Response
	*/
	public function update($id)
	{
			 $this->form_validation->set_rules('membertype', 'Name', 'required');
		    $this->form_validation->set_rules('description', 'Description', 'required');
 
 
		 if ($this->form_validation->run() == FALSE){
		
			 redirect(base_url('membertype/edit/'.$id));
		 }else{ 
			$data = array(
				'membertype' => $this->input->post('membertype' ,TRUE),
				'description' =>$this->input->post('description',TRUE),		
			  
		);
		
		   $this->membertype->update_membertype($id,$data);
		   redirect(base_url('membertype/index'));
		 }
	}
 
 
	/**
	 * Delete insert_data from this method.
	 *
	 * @return Response
	*/
	public function delete($id)
	{
		$item = $this->membertype->delete_membertype($id);
		redirect(base_url('membertype/index'));
	}
}
