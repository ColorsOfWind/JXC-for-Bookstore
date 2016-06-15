<?php

class m_purchase extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }

    /*
    **添加客户
    
    public function addClient($clientID, $clientName, $clientArea, $clientPinyin, $clientTel, $clientContact,$clientFax, $clientPostcode, $clientAddress, $clientBank, $clientBankAccount, $clientEmail, $clientInternet, $clientNote)
    {
        $query = $this->db->query("INSERT INTO client_information VALUES('$clientID', '$clientName', '$clientArea', '$clientPinyin', '$clientTel', '$clientContact''$clientFax', '$clientPostcode', '$clientAddress', '$clientBank', '$clientBankAccount', '$clientEmail', '$clientInternet', '$clientNote')");
    }
*/
    public function addpurchase($sup_Name,$Qinggouyuan,$Dinggouyuan,$Yanshouyuan,$Crashguanliyuan,$Shouhuoaddress,$warehouse_Name,$Dingdandate,$Daohuodate,$Finishstate,$Note)
    {
        $query = $this->db->query("INSERT INTO purchase_information(sup_Name,purchase_Qinggouyuan,purchase_Dinggouyuan,purchase_Yanshouyuan,purchase_Crashguanliyuan,purchase_Shouhuoaddress,warehouse_Name,purchase_Dingdandate,purchase_Daohuodate,purchase_Finishstate,purhase_Note) VALUES( '$sup_Name', '$Qinggouyuan', '$Dinggouyuan', '$Yanshouyuan', '$Crashguanliyuan','$Shouhuoaddress', '$warehouse_Name', '$Dingdandate', '$Daohuodate', '$Finishstate', '$Note')");
        return $query;
    }

    public function addpurchase_r($purchase_ID, $inf_Barcode,$calinf_Purprice,$calinf_Number,$calinf_JinE,$calinf_Time,$calinf_TotalPrice)
    {
        $query = $this->db->query("INSERT INTO purchase_calculateinf(purchase_ID, inf_Barcode,calinf_Purprice,calinf_Number,calinf_JinE,calinf_Time,calinf_TotalPrice) VALUES( '$purchase_ID', '$inf_Barcode', '$calinf_Purprice', '$calinf_Number', '$calinf_JinE','$calinf_Time', '$calinf_TotalPrice')");
        return $query;
    }

    public function addpaypurchase($payment_Sign, $payment_JinE,$sup_Name,$payment_Ticketuser,$payment_Crashguanliyuan,$payment_TicketDate,$payment_PayDate,$Finishstate,$payment_Note)
    {
        $query = $this->db->query("INSERT INTO payment_inf(payment_Sign,payment_JinE,sup_Name,payment_Ticketuser,payment_Crashguanliyuan,payment_TicketDate,payment_PayDate,payment_FinishState,payment_Note) VALUES( '$payment_Sign', '$payment_JinE', '$sup_Name', '$payment_Ticketuser', '$payment_Crashguanliyuan','$payment_TicketDate', '$payment_PayDate', '$Finishstate', '$payment_Note')");
        return $query;
    }

    public function CheckPurchase($purchase_Finishstate)
    {
        $query = $this->db->query("SELECT * FROM purchase_information WHERE purchase_Finishstate='$purchase_Finishstate'");
        return $query;
    }
     public function DeletePurchase($purchase_ID)
    {
        $query = $this->db->query("DELETE FROM purchase_information WHERE purchase_ID='$purchase_ID'");
        return $query;
    }
    public function seePurchase($purchase_ID)
    {
        $query = $this->db->query("SELECT * FROM purchase_information WHERE purchase_ID='$purchase_ID'");
        return $query;
    }

    public function checkDetail($purchase_ID)
    {
        $query = $this->db->query("SELECT * FROM purchase_calculateinf WHERE purchase_ID='$purchase_ID'");
        return $query;
    }



    public function signPurchase1($purchase_ID,$purchase_Dinggouyuan) {
        $query = $this->db->query("UPDATE purchase_information SET purchase_Dinggouyuan = '$purchase_Dinggouyuan', purchase_Finishstate = '1' WHERE purchase_ID = '$purchase_ID'");
        return $query;
    }
    public function signPurchase2($purchase_ID,$purchase_Yanshouyuan) {
        $query = $this->db->query("UPDATE purchase_information SET purchase_Yanshouyuan = '$purchase_Yanshouyuan', purchase_Finishstate = '2' WHERE purchase_ID = '$purchase_ID'");
        return $query;
    }
    public function signPurchase3($purchase_ID,$purchase_Crashguanliyuan) {
        $query = $this->db->query("UPDATE purchase_information SET purchase_Crashguanliyuan = '$purchase_Crashguanliyuan', purchase_Finishstate = '3' WHERE purchase_ID = '$purchase_ID'");
        return $query;
    }        
}

?>