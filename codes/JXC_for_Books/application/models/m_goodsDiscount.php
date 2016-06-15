<?php

class m_goodsDiscount extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }

    /*
    **添加折扣
    */
    public function addDiscount($goodID, $disDis)
    {
        $res = $this->db->query("SELECT *  FROM goods_information WHERE inf_Barcode = '$goodID'")->row_array();
        $inf_Name = $res['inf_Name'];
        $query = $this->db->query("INSERT INTO goods_discoutinformation (inf_Barcode,inf_Name, disInf_Discount) VALUES('$goodID','$inf_Name', '$disDis')");
    }

    /*
    **删除折扣
    */
    public function delDiscount($disID)
    {
        $query = $this->db->query("DELETE FROM goods_discoutinformation WHERE disInf_ID = '$disID'");
    }

    /*
    **修改折扣信息
    */
    public function changeDiscount($disID, $goodID, $disDis)
    {
        $res = $this->db->query("SELECT *  FROM goods_information WHERE inf_Barcode = '$goodID'")->row_array();
        $inf_Name = $res['inf_Name'];
        $query = $this->db->query("UPDATE goods_discoutinformation SET inf_Barcode = '$goodID', inf_Name = '$inf_Name',disInf_Discount = '$disDis'
            WHERE disInf_ID = '$disID'");
        return $query;
    }

    /*
    **查询所有折扣
    */
    public function checkAllDiscounts()
    {
        $query = $this->db->query("SELECT * FROM goods_discoutinformation");
        return $query;
    }

    /*
    **查询指定折扣，通过商品号
    */
    public function checkDiscountsGood($goodID)
    {
        $query = $this->db->query("SELECT * FROM goods_discoutinformation WHERE inf_Barcode='$goodID'");
        return $query;
    }

    /*
    **查询指定折扣，通过折扣号
    */
    public function checkDiscountsDis($disID)
    {
        $query = $this->db->query("SELECT * FROM goods_discoutinformation WHERE disInf_ID='$disID'");
        return $query;
    }
}

?>