<?php
class action extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('action_model');
	}

   public function checkBook() {
		$data['checkFields'] = $this->action_model->checkFields();

		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('checkbook', $data);
		$this->load->view('v_footer');
   }

   public function insertBook() {
		$data['insertBook'] = $this->action_model->insertBook();

		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('insertbook', $data);
		$this->load->view('v_footer');
   }

   public function updateBook() {
		$data['updateBook'] = $this->action_model->updateBook();

		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('updatebook', $data);
		$this->load->view('v_footer');
   }
}
