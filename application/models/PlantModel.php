<?php
class PlantModel extends CI_Model {
    public function get_all_plant()
    {
        $query = $this->db->query("SELECT * FROM vegetation v JOIN imagevegetation i ON v.vegetationID = i.vegetation_vegetationID WHERE status = 1");
        return $query->result();
    }
    public function get_plant_byID($id)
    {
           $sql =  "SELECT * FROM vegetation WHERE vegetationID = '".$id."'";
            $query = $this->db->query($sql);
            $sql2 =  "SELECT * FROM imagevegetation WHERE vegetation_vegetationID = '".$id."'";
            $query2 = $this->db->query($sql2);
            $vergetaion = $query->result_array();
            $vergetaion[0]['imglist'] = $query2->result_array();
            echo json_encode( $vergetaion);
            //var_dump($vergetaion);
            //return $query->result();
           // echo $sql;
            //die();
    }

   
}