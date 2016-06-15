<?php

class m_saleFront extends CI_Model{

	/*构造函数*/
	public function __construct()
	{
		$this -> load ->database();
	}

	/*新建一行，返回单据编号*/
	public function getSaleID($clientName, $counterName)
	{
		$query = $this->db->query("INSERT INTO front_sale(cl_Name, sale_Counter) VALUES('$clientName', '$counterName')");

		$query = $this->db->query("SELECT * FROM front_saledetail ORDER BY saledetail_ID DESC LIMIT 0,1");
		return $query;
	}

	/*获取客户列表*/
	public function getClient()
	{
		$query = $this->db->query("SELECT * FROM client_information");
        return $query;
	}

	/*删除前台销售信息*/
	public function delSaleFront($saleID)
	{
		$query = $this->db->query("DELETE FROM front_sale WHERE sale_ID='$saleID'");
		return $query;
	}

	/*查询所有前台销售信息*/
	public function checkAllSaleFront()
	{
		$query = $this->db->query("SELECT * FROM front_sale");
		return $query;
	}

	/*查询销售单，销售单ID*/
	public function checkSaleFrontaBySaleID($saleID)
	{
		$query = $this->db->query("SELECT * FROM front_sale WHERE sale_ID='$saleID'");
        return $query;
	}

	/*查询前台销售单，前台销售操作用户ID*/
	public function checkSaleFrontByUserID($userID)
	{
		$query = $this->db->query("SELECT * FROM front_sale WHERE sale_userID='$userID'");
        return $query;
	}

	/*查询前台销售单，完成日期*/
	public function checkSaleFrontBySaleDate($saleDate)
	{
		$query = $this->db->query("SELECT * FROM front_sale WHERE sale_Dealdate='$saleDate'");
        return $query;
	}

	/*查询前台销售单，客户姓名*/
	public function checkSaleFrontByClientName($clientName)
	{
		$query = $this->db->query("SELECT * FROM front_sale WHERE cl_Name='$clientName'");
        return $query;
	}

	/*修改前台销售信息*/
	public function changeSaleFront($saleID, $clName, $saleUserID, $saleCounter, $saleFilldate, $saleDealdate, $saleState, $saleRemarks)
	{
		$query = $this->db->query("UPDATE front_sale SET cl_Name = '$clName', sale_userID='$saleUserID', sale_Counter = '$saleCounter', sale_Filldate = '$saleFilldate', sale_Dealdate = '$saleDealdate', sale_State = '$saleState', sale_Remarks='$saleRemarks' WHERE sale_ID = '$saleID'");
        return $query;
	}
}

?>