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
    public function addpurchase($sup_Name, $Qinggouyuan,$Dinggouyuan,$Yanshouyuan,$Crashguanliyuan,$Shouhuoaddress,$warehouse_Name,$Dingdandate,$Daohuodate,$Finishstate,$Note)
    {
        $query = $this->db->query("INSERT INTO purchase_information(sup_Name,purchase_Qinggouyuan,purchase_Dinggouyuan,purchase_Yanshouyuan,purchase_Crashguanliyuan,purchase_Shouhuoaddress,warehouse_Name,purchase_Dingdandate,purchase_Daohuodate,purchase_Finishstate,purhase_Note) VALUES( '$sup_Name', '$Qinggouyuan', '$Dinggouyuan', '$Yanshouyuan', '$Crashguanliyuan','$Shouhuoaddress', '$warehouse_Name', '$Dingdandate', '$Daohuodate', '$Finishstate', '$Note')");
        return $query;
    }

    public function CheckPurchase()
    {
        $query = $this->db->query("SELECT * FROM purchase_information ");
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
}

?>