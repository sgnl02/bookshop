<?php
class status_404 extends CI_Controller {

	public function index() {
		$this->output->set_status_header('404'); 

		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('status_404');
		$this->load->view('v_footer');
	}
}
