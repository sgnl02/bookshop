<?php
class create extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('add_model');
	}

	public function index() {
		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('create');
		$this->load->view('v_footer');
	}
}
