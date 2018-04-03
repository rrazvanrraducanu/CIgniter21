<?php
class FlowerModel extends CI_Model {
 
function searchFlower($search){
    $this->db->like('nume', $search);
    $this->db->or_like('culoare', $search);
    $query = $this->db->get('flori');
    return $query->result_array();
}
}
