<?php 

class User_model extends CI_Model {
	protected $polling_station = "polling_station";
	protected $membertype = "membertype";
    protected $User_table_name = "users";

   //issert user
    public function insert_user($userData) {
		
        return $this->db->insert($this->User_table_name, $userData);
    }
//get member type
	public function get_membertype(){
       
        $query = $this->db->get('membertype');
        return $query->result();
	}
	//get polling station
	public function get_pollingstation(){
       
        $query = $this->db->get($this->polling_station);
        return $query->result();
    }
    //check login
    public function check_login($userData) {

        
       //   First Check Email is Exists in Database
         
		$query = $this->db->get_where($this->User_table_name, array('email' => $userData['email']));
		
        if ($this->db->affected_rows() > 0) {

            $email = $query->row('email');
			//check password
            if ($userData['email']== $email) {
                return [
                    'status' => TRUE,
                    'data' => $query->row(),
                ];

            } else {
			
                return ['status' => FALSE,'data' => FALSE];
            }

        } else {
            return ['status' => FALSE,'data' => FALSE];
        }
	}

	//get users
	public function get_users(){
       
        $query = $this->db->get($this->User_table_name);
        return $query->result();
	}

	//user profile
	public function find_user($id)
    {
        return $this->db->get_where($this->User_table_name, array('id' => $id))->row();
	}

	//update profile
	public function update_profile($id,$profile_data) 
    {	
            $this->db->where('id',$id);
            return $this->db->update('users',$profile_data);           
               
    }
}
