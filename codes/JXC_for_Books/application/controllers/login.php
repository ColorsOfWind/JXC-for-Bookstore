<?php
class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        // $this->load->model('check_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    public function index(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($username==null && $password==null) {
			$data = array('title' => '小型书店进销存管理系统-登录','word' => "");  
			$this->load->view('common/login.php',$data);
        }
        else{
	        $login= $this->m_login->getlog($username);
			if($password==$login['user_Password']){
				$this->session->set_tempdata('id', $login['user_ID'], 3000);
				$this->session->set_tempdata('username', $login['user_Name'], 3000);
				header("Location: http://localhost/"); 
	        }
	        else{
	            $data = array('title' => '小型书店进销存管理系统-登录','word' => "密码错误");        //密码错误处理方式
	            $this->load->view('common/login.php',$data);
	        }
        }
    }
}
?>