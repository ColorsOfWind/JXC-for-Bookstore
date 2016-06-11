<?php
defined('BASEPATH') OR exit('No direct script access allowed');	
class c_users extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
        $this->load->database();
    }

	public function users() {
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('base/users.php');
        $this->load->view('common/footer.php');
    }

    /*
	**添加用户
    */
    public function addUser()
    {
    	$userName = $this -> input -> post('userName');
    	$userPassword = $this -> input->post('userPassword');
    	if($this -> m_users -> checkUserName($userName))
    	{
			$this -> m_users -> addUser($userName, $userPassword);
			$data = array('msg' => 'true');
    	}
    	else $data = array('msg' => 'false');
    	$this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
    }

    /*删除用户*/
    public function delUser()
    {
    	$userID = $this -> input->post('userID');
    	if($this->m_users->checkUserID($userID))
    	{
    		$this->m_users->delUser($userID)；
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
    	$result = $allInfo->result();
    	$data = array('data' => $result);
    	$this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
    }

    /*
	**验证当前用户密码
    */
    public function checkCurrentUser()
    {
    	$userID = $this -> input->post('userID');
    	$currentUserID = $this -> input->post('currentUserID');
    	$currentUserPassword = $this -> input->post('currentUserPassword');
    	if($this->m_users->checkUserNamePassword($currentUserID, $currentUserPassword))
    	{
    		$this -> m_users ->
    		$data=array('msg' => 'true', 'data'=>);
    	}
    	else $data=array('msg' => 'false');
    	$this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
    }

    /*
	**修改密码
    */
    public function changePassword()
    {

    }

    /*
    **修改权限
    */
    public function changePer()
    {

    }
}

?>