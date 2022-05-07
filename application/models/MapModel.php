<?php
class MapModel extends CI_Model {
    public function get_map_byid($mapid)
    {            
        if(is_null($mapid)){
            $query = $this->db->query("SELECT * FROM `imagezone` WHERE zone_zoneID is null ");
            return $query->result_array();
        }else{
            $query = $this->db->query("SELECT * FROM `imagezone` WHERE zone_zoneID = '".$mapid."' ");
            return $query->result_array();
        }
    }


   
}