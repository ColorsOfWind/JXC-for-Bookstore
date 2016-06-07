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
    **添加商品类别
    */
    public function addGoodCat($catID, $catName)
    {
        $query = $this->db->query("INSERT INTO goods_categoryinformation(catInf_ID, catInf_Name) VALUES('$catID', '$catName')");
    }

    /*
    **删除商品类别
    */
    public function delGoodCat($catID)
    {
        $query = $this->db->query("DELETE FROM goods_categoryinformation WHERE catInf_ID = '$catID'");
    }

    /*
    **修改信息
    */
    public function changeGoodCat($goodCatID, $goodCatIndex, $goodCatName, $goodCatDescribe)
    {
        $query = $this->db->query("UPDATE goods_categoryinformation SET catInf_Index = '$goodCatIndex', catInf_Name = '$goodCatName', catInf_Describe = '$goodCatDescribe'
            WHERE catInf_ID = '$goodCatID'");
        return $query;
    }

    /*
    **查询所有商品类别
    */
    public function checkAllGoodCat()
    {
        $query = $this->db->query("SELECT * FROM goods_categoryinformation");
        return $query;
    }

    /*
    **查询指定商品类别
    */
    public function checkGoodCat($goodCatID)
    {
        $query = $this->db->query("SELECT * FROM goods_categoryinformation WHERE catInf_ID='$goodCatID'");
        return $query;
    }
}

?>