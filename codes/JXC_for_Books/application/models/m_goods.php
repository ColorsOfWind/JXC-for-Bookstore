<?php

class m_goods extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }

    /*
    **添加商品
    */
    public function addGood($goodID, $goodClassify, $goodName, $goodAlias, $goodMnemonniccode, $goodPinyin, $goodManufacture, $goodPirce)
    {
        $query = $this->db->query("INSERT INTO goods_information VALUES('$goodID', '$goodClassify', '$goodName', '$goodAlias', '$goodMnemonniccode', '$goodPinyin', '$goodManufacture', '$goodPirce')");
    }

    /*
    **删除商品
    */
    public function delGood($goodID)
    {
        $query = $this->db->query("DELETE FROM goods_information WHERE inf_Barcode = '$goodID'");
    }

    /*
    **修改价钱
    */
    public function changePrice($goodID, $price)
    {
        $query = $this->db->query("UPDATE goods_information SET inf_Commodityprice = '$price' WHERE inf_Barcode = '$goodID'");
    }

    /*
    **修改信息
    */
    public function changeGood($goodID, $goodClassify, $goodName, $goodAlias, $goodMnemonniccode,$goodPinyincode, $goodManufacture)
    {
        $query = $this->db->query("UPDATE goods_information SET inf_Classify = '$goodClassify', inf_Name = '$goodName', inf_Alias = '$goodAlias', inf_Mnemonniccode = '$goodMnemonniccode', 
            inf_Pinyincode = '$goodPinyincode'
            inf_Manufacture = $goodManufacture
            WHERE inf_Barcode = '$goodID'");
        return $query;
    }

    /*
    **查询所有商品
    */
    public function checkAllGoods()
    {
        $query = $this->db->query("SELECT * FROM goods_information");
        return $query;
    }

    /*
    **查询指定商品，通过ID
    */
    public function checkGoodID($goodID)
    {
        $query = $this->db->query("SELECT * FROM goods_information WHERE inf_Barcode='$goodID'");
        return $query;
    }
}

?>