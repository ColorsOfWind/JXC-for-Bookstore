<?php
defined('BASEPATH') OR exit('No direct script access allowed');	
class c_suppliers extends CI_Controller {

  /*
  **构造函数
  */
  public function __construct() 
  {
    parent::__construct();
    $this -> load -> database();
    $this -> load -> model('m_suppliers');
  }

  public function index() 
  {
    $data = array('title' => "书店进销存管理系统");
    $this->load->view('common/header.php',$data);
    $this->load->view('common/menu.php');
    $this->load->view('base/users.php');
    $this->load->view('common/footer.php');
  }

  /*
  **添加供货商
  */
  public function addSupplier()
  {
    $supName = $this -> input -> post('supName');
    $supArea = $this -> input -> post('supArea');
    $supPinyin = $this -> input -> post('supPinyin');
    $supBrief = $this -> input -> post('supBrief');
    $supTel = $this -> input -> post('supTel');
    $supContact = $this -> input -> post('supContact');
    $supFax = $this -> input -> post('supFax');
    $supPostcode = $this -> input -> post('supPostcode');
    $supAddress = $this -> input -> post('supAddress');
    $supBank = $this -> input -> post('supBank');
    $supBankAccount = $this -> input -> post('supBankAccount');
    $supEmail = $this -> input -> post('supEmail');
    $supInternet = $this -> input -> post('supInternet');
    $supNote = $this -> input -> post('supNote');

    $query = $this -> m_suppliers -> checkSuppliers($supName);
    if($query->num_rows() == 0)
    {
      $this -> m_suppliers -> addSupplier($supName, $supArea, $supPinyin, $sup_Brief, $supTel, $supContact, $supFax, $supPostcode, $supAddress, $supBank, $supBankAccount, $supEmail, $supInternet, $supNote);
      $data = array('msg' => 'true');
    }
    else $data = array('msg' => 'false');
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*
  **删除供应商
  */
  public function delSupplier()
  {
    $supID = $this -> input -> post('supID');

    $query = $this -> m_suppliers -> checkSuppliers($supID);
    if($query -> num_rows() != 0)
    {
      $this -> m_suppliers -> delSupplier($supID);
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
  **查找所有供应商
  */
  public function checkAllSuppliers()
  {
    $allInfo = $this -> m_suppliers -> checkAllSuppliers();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*
  **查找某个供应商
  */
  public function checkSupplier()
  {
    $supID = $this -> input -> post('supID');

    $allInfo = $this -> m_suppliers -> checkSuppliers($supID);
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*修改供应商*/
  public function changeSupplier()
  {
    $supID = $this -> input -> post('supID');
    $supName = $this -> input -> post('supName');
    $supArea = $this -> input -> post('supArea');
    $supPinyin = $this -> input -> post('supPinyin');
    $supBrief = $this -> input -> post('supBrief');
    $supTel = $this -> input -> post('supTel');
    $supContact = $this -> input -> post('supContact');
    $supFax = $this -> input -> post('supFax');
    $supPostcode = $this -> input -> post('supPostcode');
    $supAddress = $this -> input -> post('supAddress');
    $supBank = $this -> input -> post('supBank');
    $supBankAccount = $this -> input -> post('supBankAccount');
    $supEmail = $this -> input -> post('supEmail');
    $supInternet = $this -> input -> post('supInternet');
    $supNote = $this -> input -> post('supNote');

    $this -> m_suppliers -> changeSupplier($supID, $supName, $supPinyin, $supTel, $supContact,$supFax, $supPostcode, $supAddress, $supBank, $supBankAccount, $supEmail, $supInternet, $supNote);
  }
}
?>