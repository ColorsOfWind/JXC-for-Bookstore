<?php

class m_clients extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }

    /*
    **添加客户
    */
    public function addClient($clientName, $clientArea, $clientPinyin,  $clientTel, $clientContact, $clientPostcode, $clientBank, $clientBankAccount, $clientEmail, $clientInternet, $clientNote)
    {
        $query = $this->db->query("INSERT INTO client_information (cl_Name, cl_Area, cl_Pinyincode,  cl_Tel, cl_Contacts,  cl_Postcode,  cl_Bank, cl_BankAccount, cl_Email, cl_Internet, cl_Note) VALUES('$clientName', '$clientArea', '$clientPinyin',  '$clientTel', '$clientContact', '$clientPostcode',  '$clientBank', '$clientBankAccount', '$clientEmail', '$clientInternet', '$clientNote')");
        return $query;
    }

    /*
    **删除客户
    */
    public function delClient($clientID)
    {
        $query = $this->db->query("DELETE FROM client_information WHERE client_ID = '$clientID'");
    }

    /*
    **修改客户信息
    */
    public function changeClient($clientID,$clientName, $clientArea, $clientPinyin, $clientTel, $clientContact, $clientPostcode,  $clientBank, $clientBankAccount, $clientEmail, $clientInternet, $clientNote)
    {
        $query = $this->db->query("UPDATE client_information SET cl_Name = '$clientName', cl_Area = '$clientArea', cl_Pinyincode = '$clientPinyin', cl_Tel = '$clientTel', 
            cl_Contacts = '$clientContact',
            cl_Postcode = '$clientPostcode',  cl_Bank = '$clientBank', cl_BankAccount = '$clientBankAccount', 
            cl_Email = '$clientEmail',
            cl_Internet = $clientInternet, cl_Note = '$clientNote'
            WHERE client_ID = '$clientID'");
        return $query;
    }

    /*
    **查询所有客户
    */
    public function checkAllClients()
    {
        $query = $this->db->query("SELECT * FROM client_information");
        return $query;
    }

    /*
    **查询指定客户
    */
    public function checkClients($clientID)
    {
        $query = $this->db->query("SELECT * FROM client_information WHERE client_ID='$clientID'");
        return $query;
    }
}

?>