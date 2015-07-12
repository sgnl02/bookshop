<?php
class action_model extends CI_Model {

	function __autoload() {
	   parent::__construct();
		$this->load->database();
	}

	public function checkFields() {
		$addAuthorID = $this->input->post('addAuthorID');
		$addTitle = $this->input->post('addTitle');
		$addPublication = $this->input->post('addPublication');
		$addPrice = $this->input->post('addPrice');
		$addISBN = $this->input->post('addISBN');
		$addImage = $this->input->post('addImage');

		$post = $this->input->post();

		if(empty($addAuthorID)) {
			$validation['error']['authorid'] = "Author is empty";
		}
		$validation['authorid']['value'] = $addAuthorID;

		if(empty($addTitle)) {
			$validation['error']['title'] = "Title is empty";
		}
		$validation['title']['value'] = $addTitle;

		if(empty($addPublication)) {
			$validation['error']['publication'] = "Publication date is empty";
			$validation['publication']['value'] = $addPublication;
		} 
		elseif($addPublication) {
			/* 
			 * Adding a string gives an extra warning message, annoying...
			 */

			/* Y-M-D */
			$splitPublication = explode("-", $addPublication);
			$dateToday = date('Y-m-d');

			$datePublication = date($splitPublication[0] 
				. "-" . $splitPublication[1] 
				. "-" . $splitPublication[2]);

			/* M-D-Y */
			if(!checkdate($splitPublication[1]
				, $splitPublication[2]
				, $splitPublication[0])) {
					$validation['error']['publication'] 
						= "Publication date is not a valid date";
			}

			if($datePublication <= $dateToday) {
				$validation['publication']['value'] = $datePublication;
			} 
			else {
				$validation['error']['publication'] = 
				"Publication date is in the future 
				(<a href=\"http://www.amazon.com/Apple-Time-Capsule-2TB-MD032LL/dp/B0057AVXP4\">do 
				you want to buy a time capsule?</a>)";
			}
		}
		$validation['publication']['value'] = $addPublication;

		if(!empty($addImage)) {
			$validation['image']['value'] = $addImage;
		} else {
			$validation['image']['value'] = '';
		}

		if(empty($addISBN)) {
			$validation['error']['isbn'] = "ISBN is empty";
		}
		$validation['isbn']['value'] = $addISBN;

		if(empty($addPrice)) {
			$validation['error']['price'] = "Price is empty";
		}
		elseif($addPrice === '0') {
			$validation['error']['price'] = "Price should be higher than 0";
		}
		elseif(!strpos($addPrice, ".")) {
			$validation['error']['price'] = "Price should have a dot";
		}
		elseif(!preg_match('/^[1-9][0-9]*(\.[0-9]{2})?$/', $addPrice)) {
			$validation['error']['price'] = "Price has an invalid value";
		}
		$validation['price']['value'] = $addPrice;

		if(!isset($validation['error'])) {
			/*
			 * redirect('/action/insert/book');
			 *
			 * If only...
			 */
		}

		return $validation;
	}

	public function insertBook() {
		$post = $this->input->post();

		$addAuthorID = $this->input->post('addAuthorID');
		$addTitle = $this->input->post('addTitle');
		$addPublication = $this->input->post('addPublication');
		$addPrice = $this->input->post('addPrice');
		$addISBN = $this->input->post('addISBN');
		$addImage = $this->input->post('addImage');

		/* 
		 * If ISBN already exists, return error
		 */
		$this->db->select('ISBN');
		$this->db->from('book');
		$this->db->like('ISBN', $addISBN);

		if($this->db->get()->num_rows() === 1) {
			return "errorISBN";
		} else {
			/*
			 * Insert into table `book`
			 */
			$insertBook = "INSERT 
				INTO book (title, ISBN, publication, price, image_url) 
				VALUES(
					".$this->db->escape($addTitle)."
					, ".$this->db->escape($addISBN)."
					, ".$this->db->escape($addPublication)."
					, ".$this->db->escape($addPrice)."
					, ".$this->db->escape($addImage)."
				)";	

			$this->db->query($insertBook);

			/*
			 * Get last inserted id of book and insert into the table
			 * `book_has_author`
			 */

			$newBookID = $this->db->insert_id();

			$insertBookHasAuthor = "INSERT 
				INTO book_has_author (book_id_book, author_id_author) 
				VALUES(
					".$this->db->escape($newBookID)."
					, ".$this->db->escape($addAuthorID)."
				)";

			$this->db->query($insertBookHasAuthor);

			if($this->db->affected_rows()) {
				return "new";
			} else {
				return "error";
			}
		}
	}

}
