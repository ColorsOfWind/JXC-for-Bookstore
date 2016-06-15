<?php
defined('BASEPATH') OR exit('No direct script access allowed');	
class c_warehouses extends CI_Controller {

  /*
  **构造函数
  */
  public function __construct() 
  {
    parent::__construct();
    $this -> load -> database();
    $this -> load -> model('m_warehouses');
    $this -> load -> model('m_admin');
    $this->load->library('session');    
  }

  public function warehouses() 
  {
    if($this -> m_admin -> getSuper() || 
      ($this -> m_admin -> getBasic() && 
        $this -> m_admin -> getBasicWarehouse()))
    {
      $data = array('title' => "书店进销存管理系统");
      $this->load->view('common/header.php',$data);
      $this->load->view('common/menu.php');
      $this->load->view('base/users.php');
      $this->load->view('common/footer.php');
    }
    else
    {
      $data = array('title' => "书店进销存管理系统");
      $this->load->view('common/header.php',$data);
      $this->load->view('common/menu.php');
      $this->load->view('common/401.php');
      $this->load->view('common/footer.php');
    }
  }

  /*
  **添加仓库
  */
  public function addWarehouse()
  {
    $warehouseName = $this -> input -> post('warehouseName');
    $warehousePinyin = $this -> input->post('warehousePinyin');
    $warehouseLocation = $this -> input->post('warehouseLocation');
    $warehouseDescribe = $this -> input->post('warehouseDescribe');

    $query = $this -> m_warehouses -> checkWarehousesName($warehouseName);
    if($query -> num_rows() == 0)
    {
      $this -> m_warehouses -> addWarehouse($warehouseName, $warehousePinyincode, $warehouseLocation, $warehouseDescribe);
      $data = array('msg' => 'true');
    }
    else $data = array('msg' => 'false');
    $this->output -> set_content_type('application/json') -> set_output(json_encode($data));
  }

  /*
  **删除仓库
  */
  public function delWarehouse()
  {
    $warehouseID = $this -> input -> post('warehouseID');

    $query = $this -> m_warehouses -> checkWarehousesID($warehouseID);
    if($query -> num_rows() != 0)
    {
      $this -> m_warehouses -> delWarehouse($warehouseID);
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
  **查找所有用户
  */
  public function checkAllWarehouses()
  {
    $allInfo = $this -> m_warehouses -> checkAllWarehouses();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*修改仓库信息*/
  public function changeWarehouse()
  {
    $warehouseID = $this -> input -> post('warehouseID');
    $warehouseName = $this -> input -> post('warehouseName');
    $warehousePinyin = $this -> input->post('warehousePinyin');
    $warehouseLocation = $this -> input->post('warehouseLocation');
    $warehouseDescribe = $this -> input->post('warehouseDescribe');

    $query = $this -> m_warehouses -> changeWarehouse($warehouseID, $warehouseName, $warehousePinyin, $warehouseLocation, $warehouse_Describe);
  }
}
?>