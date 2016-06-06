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
    **添加用户
    */
    public function addUser($userName, $userPassword)
    {
        $query = $this->db->query("INSERT INTO user(user_Name, user_Password) VALUES('$userName','$userPassword')");
    }

    /*
    **删除用户
    */
    public function delUser($userID)
    {
        $query = $this->db->query("DELETE FROM user WHERE user_ID='$userID'");
    }

    /*
    **修改密码
    */
    public function changePassword($userID, $oldPassword, $newPassword)
    {
        $query = $this->db->query("SELECT * FROM user WHERE user_id='$userID'");
        if($query)
        {
            $query = $this->db->query("SELECT * FROM user WHERE user_id='$userID' AND user_Password='$oldPassword'");
            if($query)
            {
                $query = $this->db->query("UPDATE user SET user_Password='$newPassword' where user_ID='$userID'");
                return $query;
            }
            else return "wrongPassword";
        }
        else return "noUser";
    }

    /*
    **修改权限
    */
    public function changeAdm($userBasic, $userPur, $userStock, $userSell)
    {
        $query = $this->db->query("UPDATE user SET user_BasicInformationPermission='$userBasic', user_PurchasePermission='$userPur', user_StockPermission='$userStock', user_SellPermission='$userSell' WHERE user_ID='$userSell'");
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
    **查询指定用户
    */
    public function checkUser($userID)
    {
        $query = $this->db->query("SELECT * FROM user WHERE user_id='$userID'");
        return $query;
    }
}

?>