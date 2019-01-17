<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Word extends CI_Controller {

	
	public function index()
	{
	  
	    $this->load->model('word_model');
		$words = $this->word_model->get_words();
		$data= array('words' =>$words );
		$this->load->view("word_view",$data);

	}

}
