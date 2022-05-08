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

    public function get_showplant($zoneid)
    {      
        $query = $this->db->query("SELECT * FROM plants p LEFT JOIN imageplant i ON p.plantID = i.plants_plantID AND i.status=1 JOIN vegetation v ON p.vegetation_vegetationID = v.vegetationID WHERE p.show = 1 AND zone_zoneID = $zoneid");
            return $query->result();      
    }
   
}