<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
    	parent::__construct();
        $this->load->database();
    }
    public function index() {
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('base/addpurchase.php');
        $this->load->view('common/footer.php');
    }

    public function addPurchase() { //添加进货单，权限需求：请购员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function CheckPurchase () { //审核进货单，权限需求：订购员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function DeletePurchase () { //撤销进货单，权限需求：请购员/订购员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function CheckGoods () { //货物检查，权限需求：验收员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function PayPurchase () { //进货付款，权限需求：现金管理用户
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function SelectPurchase () { //进货单查询，权限需求：进货单查询用户
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function SelectUnpaid () { //应付帐款查询，权限需求：应付账款查询用户
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function Add_R_Purchase () { //添加进货明细，权限需求：请购员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }
    
    public function Update_R_Purchase () { //修改进货明细，权限需求：请购员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
    }   

    public function Delete_R_Purchase () { //删除进货明细，权限需求：请购员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
    }   

    public function Select_R_Purchase () { //进货明细查询，权限需求：请购员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
    }   

    public function AddPayment () { //添加付款单，权限需求：现金管理员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
    }   

    public function DeletePayment () { //删除付款单，权限需求：现金管理员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
    }   

    public function SelectPayment () { //付款单查询，权限需求：现金管理员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
    }   


}
