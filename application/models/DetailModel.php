<?php
class DetailModel extends CI_Model {
    public function get_all_detail()
    {
            //$query = $this->db->get('users'); // SELECT * FROM users

            $query = $this->db->query("SELECT * FROM vegetation v JOIN imagevegetation i ON v.vegetationID = i.vegetation_vegetationID");
            return $query->result();
    }



}