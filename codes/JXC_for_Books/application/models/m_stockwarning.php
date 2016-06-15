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

    public function updateStockWarning($inf_Barcode,$number)
    {
        $query = $this -> db -> query("SELECT * FROM stock_warning WHERE inf_Barcode = '$inf_Barcode'");
        $row = $query->row();
        $commodity_Number = $row -> commodity_Number;
        $commodity_Number = $commodity_Number + $number;
        if($commodity_Number > $row -> warning_Max) {
            $warning_State = 2;
        } else if($commodity_Number < $row -> warning_Min){
            $warning_State = 1;
        } else {
            $warning_State = 0;
        }
        $query = $this->db->query("UPDATE stock_warning SET inf_Barcode = '$inf_Barcode', commodity_Number = '$commodity_Number',warning_State = '$warning_State' WHERE inf_Barcode = '$inf_Barcode'");
        return $query;
    }
    public function checkWaringNumbers() {
        $query = $this -> db -> query("SELECT * FROM stock_warning WHERE warning_State = '1' or warning_State = '2'");
        return $query-> num_rows();
    }
}

?>