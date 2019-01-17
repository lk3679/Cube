<?php

class word_model extends CI_Model {

	function __construct()
    {
		
        // 呼叫模型(Model)的建構函數
        parent::__construct();
		$this->load->database(); 
    }
    
    function get_words()
    {
		$query = $this->db->query("select * from words order by start_word");
		return $query->result_array();
    }

}