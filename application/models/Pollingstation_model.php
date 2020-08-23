<?php


class Pollingstation_model extends CI_Model{
	protected $polling_station = "polling_station";

    public function get_pollingstation(){
       
        $query = $this->db->get($this->polling_station);
        return $query->result();
    }


    public function insert_pollingstation($insert_data)
    {    
        
        return $this->db->insert($this->polling_station, $insert_data);
    }


    public function update_pollingstation($id,$insert_data) 
    {
	
       
        if($id==0){
            return $this->db->insert($this->polling_station,$insert_data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update($this->polling_station,$insert_data);
        }        
    }


    public function find_pllingstation($id)
    {
        return $this->db->get_where($this->polling_station, array('id' => $id))->row();
    }


    public function delete_pollingstation($id)
    {
        return $this->db->delete($this->polling_station, array('id' => $id));
    }
}
?>
