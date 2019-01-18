<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {

	
	public function index()
	{

		$this->load->model('author_model');
		$AuthorList=$this->author_model->GetAuthorList();
		$data= array('AuthorList' =>$AuthorList );
		$this->load->view('author_index',$data);



	}

	public function Create()
	{
		$this->load->view('author_create');


	}

	public function Edit(){
		$this->load->view('author_edit');

	}

}
