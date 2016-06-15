<?php

class m_users extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }

    /*
    **验证用户名密码
    */
    public function checkUserNamePassword($userID, $userPassword)
    {
        $query = $this -> db -> query("SELECT * FROM user WHERE user_ID = '$userID' AND user_Password='$userPassword'");
        if($query -> num_rows() == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    /*
    **添加用户
    */
    public function addUser($userName, $userPassword)
    {
        $query = $this->db->query("INSERT INTO user(user_Name, user_Password) VALUES('$userName','$userPassword')");
        return $query;
    }

    /*
    **删除用户
    */
    public function delUser($userID)
    {
        $query = $this->db->query("DELETE FROM user WHERE user_ID='$userID'");
        return $query;
    }

    /*
    **修改密码
    */
    public function changePassword($userID, $newPassword)
    {
        $query = $this->db->query("UPDATE user SET user_Password='$newPassword' where user_ID='$userID'");
        return $query;
    }
    
    /*
    **查询密码
    */
    public function checkPassword($userID)
    {
        $query = $this->db->query("SELECT * FROM user WHERE user_ID = '$userID'");
        return $query;
    }

    /*
    **修改权限
    */
    public function changePermission($userID,$user_BasicInformationPermission,$user_B_User,$user_B_Good,$user_B_Supplier,$user_B_Client,$user_PurchasePermission,$user_P_QingGouyuan,$user_P_DingGouyuan,$user_P_YanShouyuan,$user_P_ChuNayuan,$user_StockPermission,$user_St_GoodFinder,$user_St_BillFinder,$user_St_WarningFinder,$user_SellPermission,$user_Se_Discount,$user_Se_SaleEdit,$user_Se_SaleShow)
    {
        $query = $this->db->query("UPDATE user SET 
                    user_BasicInformationPermission='$user_BasicInformationPermission',
                    user_B_User='$user_B_User',
                    user_B_Good='$user_B_Good',
                    user_B_Supplier='$user_B_Supplier',
                    user_B_Client='$user_B_Client',
                    user_PurchasePermission='$user_PurchasePermission',
                    user_P_QingGouyuan='$user_P_QingGouyuan',
                    user_P_DingGouyuan='$user_P_DingGouyuan',
                    user_P_YanShouyuan='$user_P_YanShouyuan',
                    user_P_ChuNayuan='$user_P_ChuNayuan',
                    user_StockPermission='$user_StockPermission',
                    user_St_GoodFinder='$user_St_GoodFinder',
                    user_St_BillFinder='$user_St_BillFinder',
                    user_St_WarningFinder='$user_St_WarningFinder',
                    user_SellPermission='$user_SellPermission',
                    user_Se_Discount='$user_Se_Discount',
                    user_Se_SaleEdit='$user_Se_SaleEdit',
                    user_Se_SaleShow='$user_Se_SaleShow'WHERE user_ID='$userID'");
        return $query;
    }

    /*
    **查询所有用户
    */
    public function checkAllUsers()
    {
        $query = $this->db->query("SELECT * FROM user");
        return $query;
    }

    /*
    **查询指定用户，通过ID
    */
    public function checkUserID($userID)
    {
        $query = $this->db->query("SELECT * FROM user WHERE user_ID='$userID'");
        return $query;
    }

    /*
    **查询指定用户，通过用户名
    */
    public function checkUserName($userName)
    {
        $query = $this->db->query("SELECT * FROM user WHERE user_Name='$userName'");
        return $query;
    }
}

?>