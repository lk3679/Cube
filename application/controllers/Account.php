<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	
	public function index()
	{
		$this->load->model('account_model');
		$data=$this->account_model->GetAccountList();
		echo "<pre>";
		var_dump($data);
		die;
		$this->load->view('account_index');

	}

}
