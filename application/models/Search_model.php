<?php
class search_model extends CI_Model {

	function __autoload() {
	   parent::__construct();
		$this->load->database();
	}

	public function getSearchQuery() {
		/* Setting variables, needs validity checks */
		$searchTitle = $this->input->post('searchTitle');
		$searchAuthor = $this->input->post('searchAuthor');
		$searchPublication = $this->input->post('searchPublication');
		$searchPublicationChoice = $this->input->post('searchPublicationChoice');
		$searchPrice = $this->input->post('searchPrice');
		$searchPriceChoice = $this->input->post('searchPriceChoice');

		$this->db->select('*');
		$this->db->from('book');
		$this->db->join('book_has_author', 'book_has_author.book_id_book = book.id_book', 'inner');
		$this->db->join('author', 'book_has_author.author_id_author = author.id_author', 'inner');

		if(isset($searchTitle) && !empty ($searchTitle)) {
			$this->db->like('title', $searchTitle);
		}

		if(isset($searchAuthor) && !empty ($searchAuthor)) {
			/*
			 * Found the answer online, confusing: 
			 * http://stackoverflow.com/posts/14781917/revisions
			 */
			$this->db->where("CONCAT(name, ' ', lastname) 
			LIKE '%" . $searchAuthor . "%'", NULL, FALSE);	
		}
		
		if($searchPublicationChoice === 'before'
		&& isset($searchPublication) && !empty ($searchPublication)) {
			/*
			 * Add remaining month and day, if only a year is present
			 */
			if(strlen($searchPublication) === 4) { 
				$searchPublication . "-01-01"; 
			}

			$this->db->where('publication <=', $searchPublication);
		} 
		elseif($searchPublicationChoice === 'after'
		&& isset($searchPublication) && !empty ($searchPublication)) {
			/*
			 * Add remaining month and day, if only a year is present
			 */
			if(strlen($searchPublication) === 4) { 
				$searchPublication . "-01-01"; 
			}

			$this->db->where('publication >=', $searchPublication);
		}
		
		if($searchPriceChoice === 'less'
		&& isset($searchPrice) && !empty ($searchPrice)) {
			/*
			 * Add remaining cents, if no dot is present
			 */
			if(!strpos($searchPrice, ".")) { 
				$searchPrice . ".99"; 
			}

			$this->db->where('price <=', $searchPrice);
		} 
		elseif($searchPriceChoice === 'greater'
		&& isset($searchPrice) && !empty ($searchPrice)) {
			/*
			 * Add remaining cents, if no dot is present
			 */
			if(!strpos($searchPrice, ".")) { 
				$searchPrice . ".99"; 
			}

			$this->db->where('price >=', $searchPrice);
		}

		return $this->db->get()->result_array();
	}
}
