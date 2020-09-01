<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error403 extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('login');
		}
	}

	public function index(){
		$this->load->view('403');
	}

}
