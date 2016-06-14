<?php

class m_stockwarning extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }
    /*
    **查询库存警告
    */
    public function checkAllstockwarning()
    {
        $query = $this->db->query("SELECT * FROM stock_warning");
        return $query;
    }
}

?>