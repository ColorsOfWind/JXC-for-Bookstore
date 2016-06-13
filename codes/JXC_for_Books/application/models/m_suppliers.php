<?php

class m_suppliers extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }

    /*
    **添加供应商
    */
    public function addSupplier($supName, $supArea, $supPinyin, $sup_Brief, $supTel, $supContact, $supFax, $supPostcode, $supAddress, $supBank, $supBankAccount, $supEmail, $supInternet, $supNote)
    {
        $query = $this->db->query("INSERT INTO supplier_information(sup_Name, sup_Area, sup_Pinyincode, sup_Brief, sup_Tel, sup_Contact, sup_Fax, sup_Postcode, sup_Address, sup_Bank, sup_BankAccount, sup_Email, sup_Internet, sup_Note) VALUES('$supName', '$supArea', $supPinyin', '$sup_Brief', $supTel', '$supContact', '$supFax', '$supPostcode', '$supAddress', '$supBank', '$supBankAccount', '$supEmail', '$supInternet', '$supNote')");
        return $query;
    }

    /*
    **删除供应商
    */
    public function delSupplier($supID)
    {
        $query = $this->db->query("DELETE FROM supplier_information WHERE sup_ID = '$supID'");
    }

    /*
    **修改信息
    */
    public function changeSupplier($supID, $supName, $supPinyin, $supTel, $supContact,$supFax, $supPostcode, $supAddress, $supBank, $supBankAccount, $supEmail, $supInternet, $supNote)
    {
        $query = $this->db->query("UPDATE supplier_information SET sup_Name = '$supName', sup_Pinyincode = '$supPinyin', sup_Tel = '$supTel', 
            sup_Contact = '$supContact'
            sup_Fax = $supFax, sup_Postcode = '$supPostcode', sup_Address = '$supAddress', sup_Bank = '$supBank', sup_BankAccount = '$supBankAccount', 
            sup_Email = '$supEmail'
            sup_Internet = $supInternet, sup_Note = '$supNote'
            WHERE sup_ID = '$supID'");
        return $query;
    }

    /*
    **查询所有供货商
    */
    public function checkAllSuppliers()
    {
        $query = $this->db->query("SELECT * FROM supplier_information");
        return $query;
    }

    /*
    **查询指定供货商，通过ID
    */
    public function checkSuppliers($supID)
    {
        $query = $this->db->query("SELECT * FROM supplier_information WHERE sup_ID='$supID'");
        return $query;
    }

    /*
    **查询指定供货商，通过名称
    */
    public function checkSuppliers($supName)
    {
        $query = $this->db->query("SELECT * FROM supplier_information WHERE sup_Name = '$supName'");
        return $query;
    }
}

?>