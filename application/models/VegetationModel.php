<?php
class VegetationModel extends CI_Model
{
    public function get_all_vegetation($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->query("SELECT * FROM vegetation v JOIN imagevegetation i ON v.vegetationID = i.vegetation_vegetationID WHERE status = 1");
        $rows = $query->result();
        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    public function get_total()
    {
        return $this->db->count_all('vegetation');
    }

    
public function GetSearchdata()
	{
		$this->db->select("*");	
		$this->db->like('n_common_TH',$this->input->get('search'));
		$query = $this->db->get("n_common_TH"); 
		return $query->result();
	}

}
