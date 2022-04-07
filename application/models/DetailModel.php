<?php
class DetailModel extends CI_Model {
    public function get_vegetation($id)
    {
            //$query = $this->db->get('users'); // SELECT * FROM users

            $query = $this->db->query("SELECT * FROM vegetation WHERE vegetationID = $id");
            return $query->row();
    }
    public function get_imagevegetation($id)
    {
        //$query = $this->db->query("SELECT * FROM imagevegetation WHERE vegetation_vegetationID = $id");
        $query = $this->db->query("SELECT * FROM imagevegetation i JOIN plantpath p ON i.plantpath_pathID = p.pathID WHERE vegetation_vegetationID = $id");
        return $query->result();
    }
    public function get_medicinalProperties($id)
    {
        $query = $this->db->query("SELECT * FROM medicinalProperties m JOIN plantpath p ON m.plantspath_pathID = p.pathID WHERE vegetation_vegetationID = $id");
        return $query->result();
    }
    public function get_plantpathname($id)
    {
        $query = $this->db->query("SELECT DISTINCT plantpathname ,p.pathID FROM imagevegetation i JOIN plantpath p ON i.plantpath_pathID = p.pathID WHERE vegetation_vegetationID = $id");
        return $query->result();
    }


}