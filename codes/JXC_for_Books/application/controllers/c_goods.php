<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class c_goods extends CI_Controller {

  /*
  **构造函数
  */
  public function __construct() 
  {
    parent::__construct();
    $this -> load -> database();
    $this -> load -> model('m_goods');
  }

  public function goods() 
  {
    $data = array('title' => "书店进销存管理系统");
    $this->load->view('common/header.php',$data);
    $this->load->view('common/menu.php');
    $this->load->view('base/goods.php');
    $this->load->view('common/footer.php');
  }

  /*
  **添加商品
  */
  public function addGood()
  {
    $goodID = $this -> input -> post('goodID');
    $goodCliassify = $this -> input->post('goodCliassify');
    $goodName = $this -> input->post('goodName');
    $goodAlias = $this -> input->post('goodAlias');
    $goodMnemonniccode = $this -> input->post('goodMnemonniccode');
    $goodPinyin = $this -> input->post('goodPinyin');
    $goodManufacture = $this -> input->post('goodManufacture');
    $goodPrice = $this -> input->post('goodPrice');

    $query = $this -> m_goods -> checkGoodID($goodID);
    if($query -> num_rows() == 0)
    {
      $this -> m_goods -> addGood($goodID, $goodClassify, $goodName, $goodAlias, $goodMnemonniccode, $goodPinyin, $goodManufacture, $goodPirce);
      $data = array('msg' => 'true');
    }
    else $data = array('msg' => 'false');

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*
  **删除商品
  */
  public function delGood()
  {
    $goodID = $this -> input -> post('goodID');

    $query = $this -> m_goods -> checkUserID($userID)
    if($query -> num_rows() != 0)
    {
      $this -> m_goods -> delGood($goodID);
      $data = array('msg' => 'true');
    }
    else
    {
      $data = array('msg' => 'false');
    }

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*
  **修改商品
  */
  public function changeGoods()
  {

  }

}
?>