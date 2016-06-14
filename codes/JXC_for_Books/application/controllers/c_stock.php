<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class c_stock extends CI_Controller {

  /*
  **构造函数
  */
  public function __construct() 
  {
    parent::__construct();
    $this -> load -> database();
  }


 public function checkStockCommodity() //库存商品信息  权限用户  库存商品查询员  查询商品的信息。
  {
    $data = array('title' => "书店进销存管理系统");
    $this->load->view('common/header.php',$data);
    $this->load->view('common/menu.php');
    $this->load->view('stock/checkStockCommodity.php');
    $this->load->view('common/footer.php');
  }

public function stockwarning() //库存警告  权限用户  库存警告管理员  查询商品库存的最大数，最小数。
  {
    $data = array('title' => "书店进销存管理系统");
    $this->load->view('common/header.php',$data);
    $this->load->view('common/menu.php');
    $this->load->view('stock/stockwarning.php');
    $this->load->view('common/footer.php');
  }

 }


?>