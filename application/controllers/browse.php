<?php
class browse extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('browse_model');
	}

   public function index() {
		$data['allBooksArray'] = $this->browse_model->getAllBooks();

		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('browse', $data);
		$this->load->view('v_footer');
   }
}
