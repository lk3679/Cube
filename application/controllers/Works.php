<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Controller {

	
	public function index()
	{
		$this->load->model('work_model');
		$WorkList=$this->work_model->GetWorkList();
		$this->load->model('author_model');
		$AuthorList=$this->author_model->GetAuthorList();


		// echo "<pre>";
		// var_dump($WorkList);
		// die;
		$data= array(
			'WorkList' =>$WorkList,
		    'AuthorList'=>$AuthorList);
		
		$this->load->view('work_index',$data);
		

	}

}
