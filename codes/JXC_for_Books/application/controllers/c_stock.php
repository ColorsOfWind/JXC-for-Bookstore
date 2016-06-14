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
    $this -> load -> model('m_stockwarning');
    $this -> load -> model('m_stockcommodity');
    $this -> load -> model('m_stockbill');
  }


  public function stockcommodity() //库存商品信息  权限用户  库存商品查询员  查询商品的信息。
  {
    $data = array('title' => "书店进销存管理系统");
    $this->load->view('common/header.php',$data);
    $this->load->view('common/menu.php');
    $this->load->view('stock/stockcommodity.php');
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

  public function stockbill() //库存单据查询  权限用户  库存单据查询员  查询单据信息
  {
    $data = array('title' => "书店进销存管理系统");
    $this->load->view('common/header.php',$data);
    $this->load->view('common/menu.php');
    $this->load->view('stock/stockbill.php');
    $this->load->view('common/footer.php');
  }

  public function checkAllstockwarning() //查询库存警告  权限用户  库存警告管理员  。
  {
    $allInfo = $this -> m_stockwarning -> checkAllstockwarning();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  public function checkAllstockcommodity() //查询库存商品  权限用户  库存商品管理员  。
  {
    $allInfo = $this -> m_stockcommodity -> checkAllstockcommodity();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  public function checkAllstockbill() //库存单据查询  权限用户  库存单据管理员  。
  {
    $allInfo = $this -> m_stockbill -> checkAllstockbill();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

}


?>