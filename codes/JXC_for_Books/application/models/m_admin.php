<?php

class m_admin extends CI_Model{

	/*构造函数*/
	public function __construct()
	{
		$this -> load ->database();
	}

	/*获得权限函数*/
	public function getAdmin()
	{
		if(isset($_SESSION['id'])) {
			$user_ID = $_SESSION['id'];
			$query = $this -> db -> query("SELECT * FROM user WHERE user_ID='$user_ID'");
			return $query;
		}
		else {
			return false;
		}
	}

	/*获得超级管理员权限*/
	public function getSuper()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_AllPermission;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得基础信息模块权限*/
	public function getBasic()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_BasicInformationPermission;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得基础信息模块用户管理权限*/
	public function getBasicUser()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_B_User;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得基础信息模块商品管理权限*/
	public function getBasicGood()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_B_Good;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得基础信息模块供货商管理权限*/
	public function getBasicSupplier()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_B_Supplier;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得基础信息模块客户管理权限*/
	public function getBasicClient()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_B_Cient;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得基础信息模块仓库管理权限*/
	public function getBasicWarehouse()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_B_warehouse;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得进货模块管理权限*/
	public function getPurchase()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_PurchasePermission;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得进货模块请购员管理权限*/
	public function getPurchaseQinggouyuan()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_P_QingGouyuan;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得进货模块订购员管理权限*/
	public function getPurchaseDinggouyuan()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_P_DingGouyuan;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得进货模块验收员管理权限*/
	public function getPurchaseYanshouyuan()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_P_YanShouyuan;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得进货模块出纳员管理权限*/
	public function getPurchaseChunayuan()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_P_ChuNayuan;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得库存模块管理权限*/
	public function getStock()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_StockPermission;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得库存模块GoodFinder管理权限*/
	public function getStockGoodFinder()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_St_GoodFinder;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得库存模块BillFinder管理权限*/
	public function getStockBillFinder()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_St_BillFinder;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得库存模块WarningFinder管理权限*/
	public function getStockWarningFinder()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_St_WarningFinder;
		if($index != '1')
			return false;
		else return true;
	}


	/*获得销售模块管理权限*/
	public function getSell()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_SellPermission;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得前台销售单录入权限*/
	public function getSellEdit()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_Se_SaleEdit;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得前台销售单查看权限*/
	public function getSellShow()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_Se_SaleShow;
		if($index != '1')
			return false;
		else return true;
	}

	/*获得特价商品查看权限*/
	public function getSellDiscount()
	{
		$query = $this -> getAdmin();
		$row = $query->row();
		$index = $row -> user_Se_Discount;
		if($index != '1')
			return false;
		else return true;
	}
}

?>