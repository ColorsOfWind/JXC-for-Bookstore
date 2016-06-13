<?php
defined('BASEPATH') OR exit('No direct script access allowed');	
class c_clients extends CI_Controller {

  /*
  **构造函数
  */
  public function __construct() 
  {
    parent::__construct();
    $this -> load -> database();
    $this -> load -> model('m_clients');
  }

  public function clients()
  {
    $data = array('title' => "书店进销存管理系统");
    $this->load->view('common/header.php',$data);
    $this->load->view('common/menu.php');
    $this->load->view('base/users.php');
    $this->load->view('common/footer.php');
  }

  /*
  **添加客户
  */
  public function addClient()
  {
    $clientName = $this -> input -> post('clientName');
    $clientArea = $this -> input -> post('clientArea');
    $clientPinyin = $this -> input -> post('clientPinyin');
    $clientBrief = $this -> input -> post('clientBrief');
    $clientTel = $this -> input -> post('clientTel');
    $clientContacts = $this -> input -> post('clientContacts');
    $clientFax = $this -> input -> post('clientFax');
    $clientPostcode = $this -> input -> post('clientPostcode');
    $clientAddress = $this -> input -> post('clientAddress');
    $clientBank = $this -> input -> post('clientBank');
    $clientBankAccount = $this -> input -> post('clientBankAccount');
    $clientEmail = $this -> input -> post('clientEmail');
    $clientInternet = $this -> input -> post('clientInternet');
    $clientNote = $this -> input -> post('clientNote');

    $this -> m_clients -> addClient($clientName, $clientArea, $clientPinyin, $clientBrief, $clientTel, $clientContact,$clientFax, $clientPostcode, $clientAddress, $clientBank, $clientBankAccount, $clientEmail, $clientInternet, $clientNote);
    $data = array('msg' => 'true');

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*
  **删除客户
  */
  public function delClient()
  {
    $clientID = $this -> input -> post('clientID');

    $query = $this -> m_clients -> checkClients($clientID);
    if($query -> num_rows() != 0)
    {
      $this -> m_clients -> delClient($clientID);
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
  **查找所有客户
  */
  public function checkAllClients()
  {
    $allInfo = $this -> m_clients -> checkAllClients();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*修改客户信息，待编辑*/
  public function changeClient()
  {
    $clientID = $this -> input -> post('clientID');
    $clientName = $this -> input -> post('clientName');
    $clientArea = $this -> input -> post('clientArea');
    $clientPinyin = $this -> input -> post('clientPinyin');
    $clientBrief = $this -> input -> post('clientBrief');
    $clientTel = $this -> input -> post('clientTel');
    $clientContacts = $this -> input -> post('clientContacts');
    $clientFax = $this -> input -> post('clientFax');
    $clientPostcode = $this -> input -> post('clientPostcode');
    $clientAddress = $this -> input -> post('clientAddress');
    $clientBank = $this -> input -> post('clientBank');
    $clientBankAccount = $this -> input -> post('clientBankAccount');
    $clientEmail = $this -> input -> post('clientEmail');
    $clientInternet = $this -> input -> post('clientInternet');
    $clientNote = $this -> input -> post('clientNote');

    $this -> m_clients -> changeClient($clientID, $clientName, $clientArea, $clientPinyin, $clientTel, $clientContact,$clientFax, $clientPostcode, $clientAddress, $clientBank, $clientBankAccount, $clientEmail, $clientInternet, $clientNote);
  }
}
?>