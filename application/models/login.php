<?php
class login extends CI_Model
{
	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	function get_user_detail($email, $pass)
	{
		$query = $this->db->query("select id, name from user where email='" . $email . "' and password='" . $pass . "'");
		return $query->result();
	}
}
