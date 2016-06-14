<?php

class m_stockcommodity extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }
    /*
    **查询库存商品信息
    */
    public function checkAllstockcommodity()
    {
        $query = $this->db->query("SELECT * FROM stock_commodity");
        return $query;
    }
}

?>