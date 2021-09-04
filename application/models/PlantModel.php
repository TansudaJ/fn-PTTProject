<?php
class PlantModel extends CI_Model {
    public function get_all_plant()
    {
            
            $query = $this->db->query("SELECT * FROM plants");
            return $query->result();
    }


   
}