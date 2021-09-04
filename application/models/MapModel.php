<?php
class MapModel extends CI_Model {
    public function get_all_vegetation()
    {
            //$query = $this->db->get('users'); // SELECT * FROM users
            
            $query = $this->db->query("SELECT * FROM vegetation");
            return $query->result();
    }


   
}