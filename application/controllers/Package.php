<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	
	public function index()
	{
		$this->load->view("package_index");

	}

	public function Edit()
	{
		echo "Edit";
		

	}

}
