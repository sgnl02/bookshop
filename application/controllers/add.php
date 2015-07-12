<?php
class add extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('add_model');
	}

   public function index() {
		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('add');
		$this->load->view('v_footer');
   }

   public function addBook() {
		$data['authorsResultsArray'] = $this->add_model->getAuthors();

		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('addbook', $data);
		$this->load->view('v_footer');
   }
}
