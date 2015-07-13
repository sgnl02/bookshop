<?php
class search extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('search_model');
	}

	public function index() {
		$data['searchResultsArray'] = $this->search_model->getSearchQuery();

		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('search', $data);
		$this->load->view('v_footer');
	}
}
