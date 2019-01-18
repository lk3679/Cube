<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	
	public function index()
	{
		$this->load->model('account_model');
		$AccountList=$this->account_model->GetAccountList();
		$data= array('AccountList' =>$AccountList );
		$this->load->view('account_index',$data);

	}

	public function Create(){
		$this->load->view('account_create');

	}

	public function Edit(){
		$this->load->view('account_edit');

	}

}
