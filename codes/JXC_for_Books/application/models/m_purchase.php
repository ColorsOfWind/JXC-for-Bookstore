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
    public function addClient($clientID, $clientName, $clientArea, $clientPinyin, $clientTel, $clientContact,$clientFax, $clientPostcode, $clientAddress, $clientBank, $clientBankAccount, $clientEmail, $clientInternet, $clientNote)
    {
        $query = $this->db->query("INSERT INTO client_information VALUES('$clientID', '$clientName', '$clientArea', '$clientPinyin', '$clientTel', '$clientContact''$clientFax', '$clientPostcode', '$clientAddress', '$clientBank', '$clientBankAccount', '$clientEmail', '$clientInternet', '$clientNote')");
    }

}

?>