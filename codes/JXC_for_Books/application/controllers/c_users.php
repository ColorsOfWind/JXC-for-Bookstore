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

}

?>
