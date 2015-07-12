<?php
class add_model extends CI_Model {

	function __autoload() {
	   parent::__construct();
		$this->load->database();
	}

	public function getAuthors() {
		$this->db->select('id_author, name, lastname');
		$this->db->from('author');
	
		return $this->db->get()->result_array();
	}
}
