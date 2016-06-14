<?php

class m_stockbill extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }
    /*
    **查询库存单据信息
    */
    public function checkAllstockbill()
    {
        $query = $this->db->query("SELECT * FROM stock_bill");
        return $query;
    }
}

?>