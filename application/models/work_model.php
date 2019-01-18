<?php

class work_model extends CI_Model {

	function __construct()
    {
		
        // 呼叫模型(Model)的建構函數
        parent::__construct();
		$this->load->database(); 
    }
    
    function GetWorkList()
    {
		$query = $this->db->query(
            "SELECT w.WorksNo,a.AuthorsCName,w.WorksName,w.YearStart,w.YearEnd,w.Price,m.MaterialName ".
            "FROM works w ".
            "left join worksauthors wa on w.WorksNo=wa.Works_No ".
            "left join `authors` a on wa.Author_No=a.AuthorsNo ".
            "left join menu_material m on w.MaterialsID=m.MaterialNo LIMIT 10");   
		return $query->result_array();
    }

}