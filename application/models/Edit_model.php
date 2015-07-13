<?php
class edit_model extends CI_Model {

	function __autoload() {
		parent::__construct();
		$this->load->database();
	}

	public function getBook($edit_id) {
		/* 
		 * If ID of the book does not exist, return to browse
		 */
		$this->db->select('id_book');
		$this->db->from('book');
		$this->db->like('id_book', $edit_id);

		if($this->db->get()->num_rows() === 0) {
			redirect('/browse');
		} else {	
			$this->db->select('*');
			$this->db->from('book');
			$this->db->where('id_book', $edit_id);
			$this->db->order_by("title", "asc");

			return $this->db->get()->result_array();
		}
	}

	public function getAuthors() {
		$this->db->select('id_author, name, lastname');
		$this->db->from('author');

		return $this->db->get()->result_array();
	}
}
