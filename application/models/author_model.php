<?php

class author_model extends CI_Model {

	function __construct()
    {
		
        // 呼叫模型(Model)的建構函數
        parent::__construct();
		$this->load->database(); 
    }
    
    function GetAuthorList()
    {
		$query = $this->db->get('authors');       
		return $query->result_array();
    }

}