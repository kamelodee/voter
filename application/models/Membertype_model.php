<?php


class Membertype_model extends CI_Model{
	protected $membertype = "membertype";

    public function get_membertype(){
       
        $query = $this->db->get($this->membertype);
        return $query->result();
    }


    public function insert_membertype($insert_data)
    {    
        
        return $this->db->insert($this->membertype, $insert_data);
    }


    public function update_membertype($id,$insert_data) 
    {
       
        if($id==0){
            return $this->db->insert($this->membertype,$insert_data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update($this->membertype,$insert_data);
        }        
    }


    public function find_membertype($id)
    {
        return $this->db->get_where($this->membertype, array('id' => $id))->row();
    }


    public function delete_membertype($id)
    {
        return $this->db->delete($this->membertype, array('id' => $id));
    }
}
?>
