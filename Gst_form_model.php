<?php

class Gst_form_model extends CI_model{
	
	public function save($data){
		$this->db->insert('gst_form', $data);
		return true;	
	}
	
}
?>