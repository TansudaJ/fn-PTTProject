<?php
class VegetationModel extends CI_Model
{
    public function get_all_vegetation($search)
    {
        if ($search != "") {
            $query = $this->db->query("SELECT * FROM vegetation v LEFT JOIN imagevegetation i ON v.vegetationID = i.vegetation_vegetationID AND status = 1 WHERE n_common_TH LIKE '%$search%'");
        } else {
            $query = $this->db->query("SELECT * FROM vegetation v LEFT JOIN imagevegetation i ON v.vegetationID = i.vegetation_vegetationID AND status = 1 ORDER BY n_common_TH");
        }

        return $query->result();
    }

    public function get_vegetation_byID($id)
    {
        $sql =  "SELECT * FROM vegetation WHERE vegetationID = '" . $id . "'";
        $query = $this->db->query($sql);
        $sql2 =  "SELECT * FROM imagevegetation WHERE vegetation_vegetationID = '" . $id . "'";
        $query2 = $this->db->query($sql2);
        $vegetaion = $query->result_array();
        $vegetaion[0]['imglist'] = $query2->result_array();
        echo json_encode($vegetaion);
        //var_dump($vergetaion);
        //return $query->result();
        // echo $sql;
        //die();
    }
}
