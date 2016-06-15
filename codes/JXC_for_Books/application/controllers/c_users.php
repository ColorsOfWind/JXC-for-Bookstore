<?php
defined('BASEPATH') OR exit('No direct script access allowed');	
class c_users extends CI_Controller {

  /*
  **构造函数
  */
  public function __construct() 
  {
    parent::__construct();
    $this -> load -> database();
    $this -> load -> model('m_users');
    $this -> load -> model('m_admin');
    $this->load->library('session');
  }

  public function index() 
  {
    if($this -> m_admin -> getSuper() || 
      ($this -> m_admin -> getBasic() && 
        $this -> m_admin -> getBasicUser()))
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
  **添加用户
  */
  public function addUser()
  {
    $userName = $this -> input -> post('userName');
    $userPassword = $this -> input->post('userPassword');
    $query = $this -> m_users -> checkUserName($userName);
    if($query->num_rows() == 0)
    {
      $this -> m_users -> addUser($userName, $userPassword);
      $data = array('msg' => 'true');
    }
    else $data = array('msg' => 'false');
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*
  **删除用户
  */
  public function delUser()
  {
    $userID = $this -> input -> post('userID');
    $query = $this -> m_users -> checkUserID($userID);
    if($query -> num_rows() != 0)
    {
      $this->m_users->delUser($userID);
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
  public function checkAllUsers()
  {
    $allInfo = $this -> m_users -> checkAllUsers();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*
  **验证当前用户
  */
  public function checkCurrentUser()
  {
    $currentUserID = $_SESSION['id'];
    $userid = $this -> input->post('userid');
    $currentUserPassword = $this -> input->post('currentUserPassword');
    if($this -> m_users -> checkUserNamePassword($currentUserID, $currentUserPassword))
    {
      $password = $this -> getPassword($userid) -> result();
      // $password = "123456";
      $data=array('msg' => 'true', 'password' => $password);
    }
    else $data=array('msg' => 'false');
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  public function checkCurrentUserforPermission()
  {
    $currentUserID = $_SESSION['id'];
    $userid = $this -> input->post('userid');
    $currentUserPassword = $this -> input->post('currentUserPassword');
    if($this -> m_users -> checkUserNamePassword($currentUserID, $currentUserPassword))
    {
      $data = $this -> getInfo($userid) -> row();
      // $password = "123456";
      $data=array('msg' => 'true', 'data' => $data);
    }
    else $data=array('msg' => 'false');
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }


  /*
  **返回该用户的密码，前提是验证密码成功
  */
  public function getPassword($userID)
  {
    return $this -> m_users ->checkPassword($userID);
  }

  public function getInfo($userID)
  {
    return $this -> m_users ->checkUserID($userID);
  }


  /*
  **修改密码，前提是验证密码成功
  */
  public function changePassword()
  {
    $newPassword = $this -> input->post('newPassword');
    $userID = $this -> input->post('userID');
    if($this -> m_users -> changePassword($userID, $newPassword))
    {
      $data = array('msg' => 'true');
    }
    else
    {
      $data = array('msg' => 'false');
    }
    $this -> output 
    -> set_content_type('application/json') 
    -> set_output(json_encode($data));
  }

  /*
  **修改权限，前提是验证密码成功
  */
  public function changePermission()
  {
    $userID = $this -> input -> post('userID');
    $user_BasicInformationPermission = $this -> input -> post('user_BasicInformationPermission');
    $user_B_User = $this -> input -> post('user_B_User');
    $user_B_Good = $this -> input -> post('user_B_Good');
    $user_B_Supplier = $this -> input -> post('user_B_Supplier');
    $user_B_Client = $this -> input -> post('user_B_Client');
    $user_PurchasePermission = $this -> input -> post('user_PurchasePermission');
    $user_P_QingGouyuan = $this -> input -> post('user_P_QingGouyuan');
    $user_P_DingGouyuan = $this -> input -> post('user_P_DingGouyuan');
    $user_P_YanShouyuan = $this -> input -> post('user_P_YanShouyuan');
    $user_P_ChuNayuan = $this -> input -> post('user_P_ChuNayuan');
    $user_StockPermission = $this -> input -> post('user_StockPermission');
    $user_St_GoodFinder = $this -> input -> post('user_St_GoodFinder');
    $user_St_BillFinder = $this -> input -> post('user_St_BillFinder');
    $user_St_WarningFinder = $this -> input -> post('user_St_WarningFinder');
    $user_SellPermission = $this -> input -> post('user_SellPermission');
    $user_Se_Discount = $this -> input -> post('user_Se_Discount');
    $user_Se_SaleEdit = $this -> input -> post('user_Se_SaleEdit');
    $user_Se_SaleShow = $this -> input -> post('user_Se_SaleShow');
    $this -> m_users -> changePermission($userID,$user_BasicInformationPermission,$user_B_User,$user_B_Good,$user_B_Supplier,$user_B_Client,$user_PurchasePermission,$user_P_QingGouyuan,$user_P_DingGouyuan,$user_P_YanShouyuan,$user_P_ChuNayuan,$user_StockPermission,$user_St_GoodFinder,$user_St_BillFinder,$user_St_WarningFinder,$user_SellPermission,$user_Se_Discount,$user_Se_SaleEdit,$user_Se_SaleShow);
    $data = array('msg' => 'true');
    $this -> output 
    -> set_content_type('application/json') 
    -> set_output(json_encode($data));
  }

}
?>