<?php 
//we need to start session in order to access it through CI
class Admin extends CI_Controller {	
	public function __construct() {
        parent::__construct();
		$this->load->helper('url');
    }

	public function index() {
	
		$this->load->view('admin/index');
		$this->load->view('admin/assets/scripts');

	}
	
	
}