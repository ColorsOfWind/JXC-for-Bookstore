<?php

class m_saleFront extends CI_Model{

	/*构造函数*/
	public function __construct()
	{
		$this -> load ->database();
	}

	/*添加前台销售信息*/
	public function addSaleFront($clName, $saleUserID, $saleCounter, $saleFilldate, $saleDealdate, $saleState, $saleRemarks)
	{
		$query = $this->db->query("INSERT INTO front_sale(cl_Name, sale_userID, sale_Counter, sale_Filldate, sale_Dealdate, sale_State, sale_Remarks) VALUES('$clName', '$saleUserID', '$saleCounter', '$saleFilldate', '$saleDealdate', '$saleState', '$saleRemarks')");
		return $query;
	}

	/*删除前台销售信息*/
	public function delSaleFront($saleID)
	{
		$query = $this->db->query("DELETE FROM front_sale WHERE sale_ID='$saleID'");
		return $query;
	}

	/*查询前台销售信息*/
	public function checkAllSaleFront()
	{
		$query = $this->db->query("SELECT * FROM front_sale");
		return $query;
	}

	/*查询销售单，销售单ID*/
	public function checkSaleFront($saleID)
	{
		$query = $this->db->query("SELECT * FROM front_sale WHERE sale_ID='$saleID'");
        return $query;
	}

	/*查询销售单，前台销售用户ID*/
	public function checkSaleFront($userID)
	{
		$query = $this->db->query("SELECT * FROM front_sale WHERE sale_userID='$userID'");
        return $query;
	}

	/*查询销售单，完成日期*/
	public function checkSaleFront($saleDate)
	{
		$query = $this->db->query("SELECT * FROM front_sale WHERE sale_Dealdate='$saleDate'");
        return $query;
	}

	/*查询销售单，客户姓名*/
	public function checkSaleFront($clientName)
	{
		$query = $this->db->query("SELECT * FROM front_sale WHERE cl_Name='$clientName'");
        return $query;
	}

	/*修改前台销售信息*/
	public function changeSaleFront($saleID, $clName, $saleUserID, $saleCounter, $saleFilldate, $saleDealdate, $saleState, $saleRemarks)
	{
		$query = $this->db->query("UPDATE front_sale SET cl_Name = '$clName', sale_userID='$saleUserID', sale_Counter = '$saleCounter', sale_Filldate = '$saleFilldate', sale_Dealdate = '$saleDealdate', sale_State = '$saleState', sale_Remarks='$saleRemarks'");
        return $query;
	}
}

?>