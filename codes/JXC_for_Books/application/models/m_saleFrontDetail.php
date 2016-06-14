<?php

class m_saleFrontDetail extends CI_Model{

	/*构造函数*/
	public function __construct()
	{
		$this -> load ->database();
	}

	/*通过书籍ID获取书籍基本信息*/
	public function getBookInfo($goodID)
	{
		/*获取商品名称，价格*/
		$query = $this -> db -> query("SELECT FROM goods_information WHERE inf_Barcode = '$goodID'");
		$row = $query->row();
		$inf_Name = $row -> inf_Name;
		$inf_Commodityprice = $row -> inf_Commodityprice;

		/*获取商品折扣*/
		$query = $this -> db -> query("SELECT FROM goods_discoutinformation WHERE inf_Barcode = '$goodID'");
		$row = $query->row();
		$saledetail_Discount = $row -> disInf_Discount;

		/*商品打折后售价*/
		$goodPrice = $saledetail_Discount * $inf_Commodityprice;

		$data = array('id' => $goodID,
			'name' => $inf_Name, 
			'price' => $inf_Commodityprice, 
			'salePrice' => $goodPrice);
		return $data;
	}

	/*添加前台销售明细信息*/
	public function addSaleFrontDetail($saleID, $goodID, $saledetailNumber)
	{
		/*获取商品销售价*/
		$query = $this -> db -> query("SELECT FROM goods_information WHERE inf_Barcode = '$goodID'");
		$row = $query->row();
		$inf_Commodityprice = $row -> inf_Commodityprice;

		/*获取商品折扣*/
		$query = $this -> db -> query("SELECT FROM goods_discoutinformation WHERE inf_Barcode = '$goodID'");
		$row = $query->row();
		$saledetail_Discount = $row -> disInf_Discount;

		$saledetail_Price = $inf_Commodityprice * $saledetail_Discount;
		$saledetail_Amount = $saledetail_Number * $saledetail_Price;

		$saledetailTotle = $saledetail_Amount;

		$query = $this -> db -> query("INSERT INTO front_saledetail(sale_ID, inf_Barcode, inf_Commodityprice, saledetail_Discount, saledetail_Price, saledetail_Number, saledetail_Amount, saledetail_Totle) VALUES('$saleID', '$goodID', '$infCommodityprice', '$saledetailDiscount', '$saledetailPrice', '$saledetailAmount', '$saledetailTotle')");

		return $query;
	}

	/*删除前台销售明细信息*/
	public function delSaleFrontDetail($saleDetailID)
	{
		$query = $this -> db -> query("DELETE FROM front_saledetail WHERE saledetail_ID='$saleDetailID'");
		return $query;
	}

	/*查询前台销售明细信息*/
	public function checkAllSaleFrontDetail()
	{
		$query = $this->db->query("SELECT * FROM front_saledetail");
		return $query;
	}

	/*查询销售明细单，单据编号*/
	public function checkSaleFrontDetailBySaleID($saleID)
	{
		$query = $this->db->query("SELECT * FROM front_saledetail WHERE sale_ID='$saleID'");
        return $query;
	}

	/*查询销售明细单，商品条形码*/
	public function checkSaleFrontDetailByGoodID($goodID)
	{
		$query = $this->db->query("SELECT * FROM front_saledetail WHERE inf_Barcode='$goodID'");
        return $query;
	}

	/*修改前台销售明细信息*/
	public function changeSaleFrontDetail($saleDetailID, $saleID, $goodID, $saleNumber)
	{
		/*从原信息中获取当前的商品售价和折扣*/
		$query = $this -> db -> query("SELECT FROM front_saledetail WHERE saledetail_ID = '$saledetailID'");
		$row = $query->row();
		$inf_Commodityprice = $row -> inf_Commodityprice;
		$saledetail_Discount = $row -> saledetail_Discount;

		/*重新计算各种金额*/
		$saledetailPrice = $infCommodityprice * $saledetailDiscount;
		$saledetailAmount = $saledetailNumber * $saledetailPrice;

		$saledetailTotle = $saledetailAmount;

		$query = $this->db->query("UPDATE front_saledetail SET sale_ID = '$saleID', inf_Barcode = '$goodID', saledetail_Number = '$saleNumber', saledetail_Amount = '$saledetailAmount', saledetail_Totle = '$saledetailTotle ' WHERE saledetail_ID = '$saleDetailID'");
        return $query;
	}
}

?>