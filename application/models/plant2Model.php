<?php
class plant2Model extends CI_Model
{
    public function get_plant($id)
    {
        $query = $this->db->query("SELECT * FROM plants WHERE plantID = $id");
        return $query->row();
    }
    public function get_vegetation($id)
    {
        $query = $this->db->query("SELECT * FROM plants p JOIN vegetation v ON v.vegetationID = p.vegetation_vegetationID WHERE plantID = $id");
        return $query->row();
    }
    public function get_imageplant($id)
    {
        $query = $this->db->query("SELECT * FROM imageplant i JOIN plantpath p ON i.plantpath_pathID = p.pathID WHERE plants_plantID = $id");
        return $query->result();
    }
    public function get_plantpathname($id)
    {
        $query = $this->db->query("SELECT DISTINCT plantpathname ,p.pathID FROM imageplant i JOIN plantpath p ON i.plantpath_pathID = p.pathID WHERE plants_plantID = $id");
        return $query->result();
    }
}
