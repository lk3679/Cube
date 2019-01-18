<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configure extends CI_Controller {

	
	public function index()
	{
		$this->load->view('configure_index');
	}

}
