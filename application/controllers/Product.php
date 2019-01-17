<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function index()
	{
		// $this->load->view("product_view");
		//$this->load->library('Car');
		$a=new Car();
		$a->sale();

		echo "the color is ".$a->color;

	}

	public function  Detail(){
		echo "Show Product detail";
	}
}
