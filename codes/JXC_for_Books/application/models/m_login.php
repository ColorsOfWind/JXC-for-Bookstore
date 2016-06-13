<?php

class m_login extends CI_Model {

	/*
	**构造函数
	*/
	public function __construct()
    {
        $this->load->database();
    }

    /*
    **得到用户对应密码
    */
    public function getlog($username)
    {
        $query = $this->db->query("SELECT * FROM user WHERE user_Name = '$username'");
        return $query->row_array();
    }
}

?>