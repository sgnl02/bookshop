<?php
class browse_model extends CI_Model {

	function __autoload() {
	   parent::__construct();
		$this->load->database();
	}

	public function getAllBooks() {
		$this->db->select('*');
		$this->db->from('book');
		$this->db->join('book_has_author', 'book_has_author.book_id_book = book.id_book', 'inner');
		$this->db->join('author', 'book_has_author.author_id_author = author.id_author', 'inner');
		$this->db->order_by("title", "asc");
		
		return $this->db->get()->result_array();
	}
}
