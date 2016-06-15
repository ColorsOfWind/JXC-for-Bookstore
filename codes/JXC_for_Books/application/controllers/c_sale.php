<?php
defined('BASEPATH') OR exit('No direct script access allowed');	
class c_sale extends CI_Controller {

	/*
	**构造函数
	*/
	public function __construct() 
	{
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('m_saleFront');
		$this -> load -> model('m_saleFrontDetail');
		$this -> load -> model('m_goods');
	}

	public function index() 
	{
		$data = array('title' => "书店进销存管理系统");
		$this->load->view('common/header.php',$data);
		$this->load->view('common/menu.php');
		$this->load->view('base/users.php');
		$this->load->view('common/footer.php');
	}

	public function sale() 
	{
		$data = array('title' => "书店进销存管理系统");
		$this->load->view('common/header.php',$data);
		$this->load->view('common/menu.php');
		$this->load->view('sales/sale.php');
		$this->load->view('common/footer.php');
	}
	public function showSale() 
	{
		$data = array('title' => "书店进销存管理系统");
		$this->load->view('common/header.php',$data);
		$this->load->view('common/menu.php');
		$this->load->view('sales/showSale.php');
		$this->load->view('common/footer.php');
	}


	/*新建一行，返回单据编号*/
	public function getSaleID()
	{
		$clientName = $this -> input -> post('clientName');
		$query = $this -> m_saleFront -> getSaleID($clientName);
		$row = $query->row();
		$saleID = $row -> salebill_ID;

		$data = array('saleID' => $saleID);
		$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*返回客户列表*/
	public function getClient()
	{
		$allInfo = $this -> m_saleFront -> getClient();
    	$result = $allInfo -> result();
    	$data = array('data' => $result);
    	$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*通过书籍条形码获取书籍基本信息*/
	public function getBookInfo()
	{
		$goodID = $this -> input -> post('goodID');

		$data = $this -> m_saleFrontDetail -> getBookInfo($goodID);

		$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*添加销售单*/
	public function addSale()
	{
		$clName = $this -> input -> post('clName');
		$saleUserID = $this -> input -> post('saleUserID');
		$saleCounter = $this -> input -> post('saleCounter');
		$saleFilldate = $this -> input -> post('saleFilldate');
		$saleDealdate = $this -> input -> post('saleDealdate');
		$saleState = $this -> input -> post('saleState');
		$saleRemarks = $this -> input -> post('saleRemarks');

		$this -> m_saleFront -> addSaleFront($clName, $saleUserID, $saleCounter, $saleFilldate, $saleDealdate, $saleState, $saleRemarks);
	}

	/*删除销售单*/
	public function delSale()
	{
		$saleID = $this -> input -> post('saleID');

		$this -> m_saleFront -> delSaleFront($saleID);
	}

	/*修改销售单*/
	public function changeSale()
	{
		$saleID = $this -> input -> post('saleID');
		$clName = $this -> input -> post('clName');
		$saleUserID = $this -> input -> post('saleUserID');
		$saleCounter = $this -> input -> post('saleCounter');
		$saleFilldate = $this -> input -> post('saleFilldate');
		$saleDealdate = $this -> input -> post('saleDealdate');
		$saleState = $this -> input -> post('saleState');
		$saleRemarks = $this -> input -> post('saleRemarks');

		$data = $this -> m_saleFront -> changeSaleFront($saleID, $clName, $saleUserID, $saleCounter, $saleFilldate, $saleDealdate, $saleState, $saleRemarks);

		$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*查看销售单*/
	public function checkAllSale()
	{
		$allInfo = $this -> m_saleFront -> checkAllSaleFront();
    	$result = $allInfo -> result();
    	$data = array('data' => $result);
    	$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*查看销售单，销售单ID*/
	public function checkSaleBySaleID()
	{
		$saleID = $this -> input -> post('saleID');

		$allInfo = $this -> m_saleFront -> checkSaleFrontaBySaleID($saleID);
		$result = $allInfo -> result();
    	$data = array('data' => $result);
    	$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*查看销售单，前台销售操作用户ID*/
	public function checkSaleByUserID()
	{
		$userID = $this -> input -> post('userID');

		$allInfo = $this -> m_saleFront -> checkSaleFrontByUserID($userID);
		$result = $allInfo -> result();
    	$data = array('data' => $result);
    	$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*查看销售单，完成日期*/
	public function checkSaleBySaleDate()
	{
		$saleDate = $this -> input -> post('saleDate');

		$allInfo = $this -> m_saleFront -> checkSaleFrontBySaleDate($saleDate);
		$result = $allInfo -> result();
    	$data = array('data' => $result);
    	$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*查看销售单，客户姓名*/
	public function checkSaleByClientName()
	{
		$clientName = $this -> input -> post('clientName');

		$allInfo = $this -> m_saleFront -> checkSaleFrontByClientName($clientName);
		$result = $allInfo -> result();
    	$data = array('data' => $result);
    	$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}









	/*添加销售明细单*/
	public function addSaleDetail()
	{
		$saleID = $this -> input -> post('saleID');
		$goodID = $this -> input -> post('goodID');
		$saledetailNumber = $this -> input -> post('saledetailNumber');

		$this -> m_saleFrontDetail -> addSaleFrontDetail($saleID, $goodID, $saledetailNumber);
	}

	/*删除销售明细*/
	public function delSaleDetail()
	{
		$saleDetailID = $this -> input -> post('saleDealID');

		$this -> m_saleFrontDetail -> delSaleFrontDetail($saleDetailID);
	}

	/*修改销售明细*/
	public function changeSaleDetail()
	{
		$saleDetailID = $this -> input -> post('saleDetailID');
		$saleID = $this -> input -> post('saleID');
		$goodID = $this -> input -> post('goodID');
		$saledetailNumber = $this -> input -> post('saledetailNumber');

		$this -> m_saleFrontDetail -> changeSaleFrontDetail($saleDetailID, $saleID, $goodID, $saleNumber);
	}

	/*查询销售明细，单据编号*/
	public function checkSaleDetailBySaleID()
	{
		$saleID = $this -> input -> get('saleID');

		$allInfo = $this -> m_saleFrontDetail -> checkSaleFrontDetailBySaleID($saleID);
		$result = $allInfo -> result();
	    $arrlength=count($result);
	    for ($i=0; $i < $arrlength; $i++) { 
			$result[$i] = (array)$result[$i];
			$res = $this -> m_goods -> checkGoodID($result[$i]["inf_Barcode"])-> row_array();
			$result[$i]["inf_Name"] = $res["inf_Name"];
		}
    	$data = array('data' => $result);
    	$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}

	/*查询销售明细，商品条形码*/
	public function checkSaleDetailByGoodID()
	{
		$goodID = $this -> input -> post('goodID');

		$allInfo = $this -> m_saleFrontDetail -> checkSaleFrontDetailByGoodID($goodID);
		$result = $allInfo -> result();
    	$data = array('data' => $result);
    	$this->output ->set_content_type('application/json') ->set_output(json_encode($data));
	}
}

?>