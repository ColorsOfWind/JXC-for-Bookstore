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

    public function updateStock($inf_Barcode,$number)
    {
        $query = $this -> db -> query("SELECT * FROM stock_commodity WHERE inf_Barcode = '$inf_Barcode'");
        $row = $query->row();
        $commodity_Number = $row -> commodity_Number;
        $commodity_Number = $commodity_Number + $number;
        $query = $this->db->query("UPDATE stock_commodity SET inf_Barcode = '$inf_Barcode', commodity_Number = '$commodity_Number' WHERE inf_Barcode = '$inf_Barcode'");
        return $query;
    }
}

?>