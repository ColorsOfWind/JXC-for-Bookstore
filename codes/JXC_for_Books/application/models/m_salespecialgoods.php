<?php

class m_salespecialgoods extends CI_Model {

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
    public function checkAllsalespecialgoods()
    {
        $query = $this->db->query("SELECT * FROM goods_special");
        return $query;
    }
}

?>