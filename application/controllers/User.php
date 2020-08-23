<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public $users;
    public function __construct() {
        parent::__construct();
        // $this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('User_model');


		$this->users = new User_model;
    }


	public function index()
   {
       $data['users'] = $this->users->get_users();

             
       $this->load->view('users/index',$data);
      
   }


   public function registration()
   {
	   $this->form_validation->set_rules('fullname', 'Full Name', 'required');
	   $this->form_validation->set_rules('birthdate', 'birth date', 'required'); // Unique Field
	   $this->form_validation->set_rules('membertype', 'membertype', 'required'); // Unique Field
	   $this->form_validation->set_rules('polling_station', 'pollig station', 'required'); // Unique Field
	   $this->form_validation->set_rules('location', 'location', 'required'); // Unique Field

	   $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]', [
		   'is_unique' => 'The %s already exists. Please use a different email',
	   ]); // // Unique Field

	   $this->form_validation->set_rules('phone_number', 'Mobile Number', 'required|min_length[10]|max_length[10]|numeric');
	   $this->form_validation->set_rules('password', 'Password', 'required');
	   $this->form_validation->set_rules('passwordConfirm', 'Password Confirmation', 'required|matches[password]');

	   if ($this->form_validation->run() == false)
	   {
		       $pollingstations =	$pollingData['pollingstations'] = $this->users->get_pollingstation();
			    $membertypes =$membetypeData['membertypes'] = $this->users->get_membertype();
				$data['data'] = [$membertypes,$pollingstations];
				
		         $this->load->view("users/registration", $data);
		   
	   }
	   else
	   {   
		$insert_data = array(
			'fullname' => $this->input->post('fullname' ,TRUE),
			'birthdate' =>$this->input->post('birthdate',TRUE),
			'phone_number' =>$this->input->post('phone_number',TRUE),
			'email' => $this->input->post('email',TRUE),
			'polling_station' =>$this->input->post('polling_station',TRUE),
			'location' => $this->input->post('location',TRUE),
			'membertype' => $this->input->post('membertype',TRUE),
			'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),
		   'is_active' => 1,
		  );

		   /**
			* Load User Model
			*/
			
		   
		   $result = $this->users->insert_user($insert_data);

		   if ($result == TRUE) {

			   $this->session->set_flashdata('success_flashData', 'You have registered successfully.');
			   redirect(  base_url('login'));

			 

		   } else {

			   $this->session->set_flashdata('error_flashData', 'Invalid Registration.');
			   redirect(  base_url('registration'));

		   }
	   }
   }



   
    /**
     * User Login
	 * 

     */


	public function login()
	{
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['page_title'] = "User Login";          
            $this->load->view("users/login");         
        }
        else
        {
            $login_data = array(
                'email' => $this->input->post('email', TRUE),
                'password' => $this->input->post('password', TRUE)
            );
           
            $result = $this->users->check_login($login_data);

            if (!empty($result['status']) && $result['status'] === TRUE) {

                /**
                 * Create Session
                 * -----------------
                 * First Load Session Library
                 */
                $session_array = array(
                    'USER_ID'  => $result['data']->id,
                    'FULLNAME'  => $result['data']->fullname,
                    'USER_EMAIL' => $result['data']->email,
                    'IS_ACTIVE'  => $result['data']->is_active,
                );
                
                $this->session->set_userdata($session_array);

                $this->session->set_flashdata('success_flashData', 'Login Success');
                redirect('dashboard');

            } else {

                $this->session->set_flashdata('error_flashData', 'Invalid Email/Password.');
                redirect('login');
            }
        }
	}
	//get users
	
    
    /**
     * User Logout
	 * 
	 *
     */
	public function profile()
	{
		$id = $this->session->userdata('USER_ID');
	   $userdata = $this->users->find_user($id);
	   $pollingstations =	$pollingData['pollingstations'] = $this->users->get_pollingstation();
	   $membertypes =$membetypeData['membertypes'] = $this->users->get_membertype();
	   $data['data'] = [$membertypes,$pollingstations];
	 
	   $this->load->view('users/profile',array('user'=>$userdata,'data'=>$data));
	  
	}

	//update profile
	public function update()
	{
		

		$insert_data = array(
			'fullname' => $this->input->post('fullname' ,TRUE),
			'birthdate' =>$this->input->post('birthdate',TRUE),
			'phone_number' =>$this->input->post('phone_number',TRUE),
			'email' => $this->input->post('email',TRUE),
			'polling_station' =>$this->input->post('polling_station',TRUE),
			'location' => $this->input->post('location',TRUE),
			'membertype' => $this->input->post('membertype',TRUE),
			'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),
		   'is_active' => 1,
		  
	);

	    $id = $this->input->post('id');
		  
		   $this->users->update_profile($id,$insert_data);
		   redirect(base_url('profile'));
		 
	}
 

    public function logout() {

        /**
         * Remove Session Data
         */
        $remove_sessions = array('USER_ID', 'USERNAME','USER_EMAIL','IS_ACTIVE', 'USER_NAME');
        $this->session->unset_userdata($remove_sessions);

        redirect(base_url('login'));
    }

    /**
     * User Panel
     */
    public function panel() {

        if (empty($this->session->userdata('USER_ID'))) {
            redirect(base_url('login'));
        }

        $data['page_title'] = "Welcome to User Panel";
      
        $this->load->view("dashboard",$data);
        
    }
}
