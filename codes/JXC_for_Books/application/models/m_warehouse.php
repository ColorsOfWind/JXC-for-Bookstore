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
    public function addWarehouse($warehouseID, $warehouseName, $warehousePinyincode, $warehouseLocation, $warehouse_Describe)
    {
        $query = $this->db->query("INSERT INTO warehouse_information VALUES('$warehouseID', '$warehouseName', '$warehousePinyincode', '$warehouseLocation', '$warehouse_Describe')");
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
    public function changeWarehouse($warehouseID, $warehouseName, $warehousePinyincode, $warehouseLocation, $warehouse_Describe)
    {
        $query = $this->db->query("UPDATE warehouse_information SET warehouse_Name = '$warehouseName', warehouse_Pinyincode = '$warehousePinyincode', warehouse_Location = '$warehouseLocation', warehouse_Describe = '$warehouse_Describe'
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
    **查询指定仓库
    */
    public function checkWarehouses($warehouseID)
    {
        $query = $this->db->query("SELECT * FROM warehouse_information WHERE warehouse_ID='$warehouseID'");
        return $query;
    }
}

?>