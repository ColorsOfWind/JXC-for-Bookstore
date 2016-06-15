<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_purchase extends CI_Controller {

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
        $this -> load -> model('m_purchase');
    }
    public function index() {
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function check() {
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/checkPurchase.php');
        $this->load->view('common/footer.php');
    }
    public function checkgoods() {//货物检查，权限需求：验收员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/checkGoods.php');
        $this->load->view('common/footer.php');
    }

    public function paypurchase () { //进货付款，权限需求：现金管理用户
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/payPurchase.php');
        $this->load->view('common/footer.php');
    }

    public function addPurchase() { //添加进货单，权限需求：请购员

        $sup_Name = $this -> input -> post('sup_Name');
        $Qinggouyuan = $this -> input->post('Qinggouyuan');
        $Dinggouyuan = $this -> input -> post('Dinggouyuan'); 
        $Yanshouyuan = $this -> input->post('Yanshouyuan');
        $Crashguanliyuan = $this -> input->post('Crashguanliyuan');
        $Shouhuoaddress = $this -> input -> post('Shouhuoaddress');
        $warehouse_Name = $this -> input->post('warehouse_Name');
        $Dingdandate = $this -> input -> post('Dingdandate');
        $Daohuodate = $this -> input->post('Daohuodate');
        $Note = $this -> input -> post('Note');
       
        if(1==1)
        {
          $this -> m_purchase -> addpurchase(/*$purchase_ID,*/$sup_Name, $Qinggouyuan,$Dinggouyuan,$Yanshouyuan,$Crashguanliyuan,$Shouhuoaddress,$warehouse_Name,$Dingdandate,$Daohuodate,0,$Note);
          $data = array('msg' => 'true');
        }
        else $data = array('msg' => 'false');
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }



    public function addPurchase_R() { //添加进货明细，权限需求：请购员

        $purchase_ID = $this -> input -> post('purchase_ID');
        $inf_Barcode = $this -> input->post('inf_Barcode');
        $calinf_Purprice = $this -> input -> post('calinf_Purprice'); 
        $calinf_Number = $this -> input->post('calinf_Number');
        $calinf_JinE = $this -> input->post('calinf_JinE');
        $calinf_Time = $this -> input -> post('calinf_Time');
        $calinf_TotalPrice = $this -> input->post('calinf_TotalPrice');
        
       
        if(1==1)
        {
          $this -> m_purchase -> addpurchase_r($purchase_ID, $inf_Barcode,$calinf_Purprice,$calinf_Number,$calinf_JinE,$calinf_Time,$calinf_TotalPrice);
          $data = array('msg' => 'true');
        }
        else $data = array('msg' => 'false');
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }



    public function addpayPurchase() { //添加付款单，权限需求：请购员
        
        
        $payment_Sign = $this -> input -> post('payment_Sign');
        $payment_JinE = $this -> input->post('payment_JinE');
        $sup_Name = $this -> input -> post('sup_Name'); 
        $payment_Ticketuser = $this -> input->post('payment_Ticketuser');
        $payment_Crashguanliyuan = $this -> input->post('payment_Crashguanliyuan');
        $payment_TicketDate = $this -> input -> post('payment_TicketDate');
        $payment_PayDate = $this -> input->post('payment_PayDate');
        $payment_Note = $this -> input -> post('payment_Note');
        
        if(1==1)
        {
          $this -> m_purchase -> addpaypurchase($payment_Sign, $payment_JinE,$sup_Name,$payment_Ticketuser,$payment_Crashguanliyuan,$payment_TicketDate,$payment_PayDate,3,$payment_Note);
          $data = array('msg' => 'true');
        }
        else $data = array('msg' => 'false');
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }

    public function CheckPurchase () { //审核进货单，权限需求：订购员
        $allInfo = $this -> m_purchase -> CheckPurchase();
        $result = $allInfo -> result();
        $data = array('data' => $result);
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }

    public function DeletePurchase () { //撤销进货单，权限需求：请购员/订购员
        $purchase_ID = $this -> input -> post('purchase_ID');
        
        $query=  $this->m_purchase->DeletePurchase($purchase_ID);
        if($query)
        {
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
    public function seePurchase() { //查看进货单
        $purchase_ID = $this -> input -> post('purchase_ID');
    
        if(1==1)
        {
          $data = array('msg' => 'true', "data" => $this -> m_purchase -> seePurchase($purchase_ID)->result());
        }
        else $data = array('msg' => 'false');
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }

    /*public function CheckGoods () { //货物检查，权限需求：验收员
        $data = array('title' => "书店进销存管理系统");
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php');
        $this->load->view('purchase/addPurchase.php');
        $this->load->view('common/footer.php');
    }*/


    public function checkSaleDetailBySaleID()
    {
        $purchase_ID = $this -> input -> get('saleID');

        $allInfo = $this -> m_purchase -> checkDetail($purchase_ID);
        $result = $allInfo -> result();
        // $arrlength=count($result);
        // for ($i=0; $i < $arrlength; $i++) { 
        //     $result[$i] = (array)$result[$i];
        //     $res = $this -> m_goods -> checkGoodID($result[$i]["inf_Barcode"])-> row_array();
        //     $result[$i]["inf_Name"] = $res["inf_Name"];
        // }
        $data = array('data' => $result);
        $this->output ->set_content_type('application/json') ->set_output(json_encode($data));
    }

    

    
}
