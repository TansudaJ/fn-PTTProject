<?php
class PlantModel extends CI_Model
{
    public function get_plant()
    {
        $query = $this->db->query("SELECT * FROM plants p LEFT JOIN imageplant i ON p.plantID = i.plants_plantID AND i.status=1 JOIN vegetation v ON p.vegetation_vegetationID = v.vegetationID WHERE p.show = 1 ORDER BY n_common_TH");
        return $query->result();
    }
    public function get_plantpathname()
    {
        $query = $this->db->query("SELECT DISTINCT nameTH ,zoneID FROM plants p JOIN zone z ON p.zone_zoneID = z.zoneID ");
        return $query->result();
    }

}
