<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PollingStation extends CI_Controller {


   public $pollingstation;


   /**
    * Get All insert_data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Pollingstation_model');


      $this->pollingstation = new Pollingstation_model;
   }


   /**
    * Display insert_data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['pollingstations'] = $this->pollingstation->get_pollingstation();

             
       $this->load->view('pollingstations/index',$data);
      
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $pollingstation_insert_data = $this->pollingstation->find_pollingstation($id);
     
      $this->load->view('pollingstation/show',array('pollingstation'=>$pollingstation_insert_data));
     
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      
      $this->load->view('pollingstations/create');
      
   }


   /**
    * Store insert_data from this method.
    *
    * @return Response
   */
   public function store()
   {
	$insert_data = array(
		'name' => $this->input->post('name' ,TRUE),
		'location' =>$this->input->post('location',TRUE),
		         );
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashinsert_data('errors', validation_errors());
            redirect(base_url('pollingstations/create'));
        }else{
           $this->pollingstation->insert_pollingstation($insert_data);
           redirect(base_url('pollingstations'));
        }
    }


   /**
    * Edit insert_data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $data = $this->pollingstation->find_pllingstation($id);

       $this->load->view('pollingstations/edit',array('station'=>$data));
      
   }


   /**
    * Update insert_data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
	$insert_data = array(
		'name' => $this->input->post('name' ,TRUE),
		'location' =>$this->input->post('location',TRUE),
		
	  
);
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');


        if ($this->form_validation->run() == FALSE){
            redirect(base_url('pollingstations/edit/'.$id));
        }else{ 
          $this->pollingstation->update_pollingstation($id,$insert_data);
          redirect(base_url('pollingstations'));
        }
   }


   /**
    * Delete insert_data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->pollingstation->delete_pollingstation($id);
       redirect(base_url('pollingstations'));
   }
}
