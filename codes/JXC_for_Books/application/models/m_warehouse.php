<?php

class m_warehouses extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }

    /*
    **添加仓库
    */
    public function addWarehouse($warehouseName, $warehousePinyincode, $warehouseLocation, $warehouseDescribe)
    {
        $query = $this->db->query("INSERT INTO warehouse_information (warehouse_Name, warehouse_Pinyincode, warehouse_Location, warehouse_Describe) VALUES('$warehouseName', '$warehousePinyincode', '$warehouseLocation', '$warehouseDescribe')");
    }

    /*
    **删除仓库
    */
    public function delWarehouse($warehouseID)
    {
        $query = $this->db->query("DELETE FROM warehouse_information WHERE warehouseID = '$warehouseID'");
    }

    /*
    **修改仓库信息
    */
    public function changeWarehouse($warehouseID, $warehouseName, $warehousePinyincode, $warehouseLocation, $warehouseDescribe)
    {
        $query = $this->db->query("UPDATE warehouse_information SET warehouse_Name = '$warehouseName', warehouse_Pinyincode = '$warehousePinyincode', warehouse_Location = '$warehouseLocation', warehouse_Describe = '$warehouseDescribe'
            WHERE warehouse_ID = '$warehouseID'");
        return $query;
    }

    /*
    **查询所有仓库
    */
    public function checkAllWarehouses()
    {
        $query = $this->db->query("SELECT * FROM warehouse_information");
        return $query;
    }

    /*
    **查询指定仓库，通过ID
    */
    public function checkWarehousesID($warehouseID)
    {
        $query = $this->db->query("SELECT * FROM warehouse_information WHERE warehouse_ID='$warehouseID'");
        return $query;
    }

    /*
    **查询指定仓库，通过名称
    */
    public function checkWarehousesName($warehouseName)
    {
        $query = $this->db->query("SELECT * FROM warehouse_information WHERE warehouse_Name='$warehouseName'");
        return $query;
    }
}

?>