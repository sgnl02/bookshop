<?php
class edit extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('edit_model');
	}

   public function editBook($edit_id) {
		$data['getBook'] = $this->edit_model->getBook($edit_id);
		$data['authorsResultsArray'] = $this->edit_model->getAuthors();

		$this->load->view('v_header');
		$this->load->view('v_nav');
		$this->load->view('editbook', $data);
		$this->load->view('v_footer');
   }
}
