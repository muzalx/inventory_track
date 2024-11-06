<?php

class Model_item extends CI_Model
{
    public function getAvailableItem() {
        $sql = "SELECT * FROM assets WHERE quantity >0";
		$query = $this->db->query($sql);
		return $query->result_array();
    }
}