<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
Class Login_model extends CI_Model
{
	private $db_table_name='demo_user';
	function __construct()
	{ 
		parent::__construct(); 
	}
	function checkUser($userData)
	{
		$this->db->select('`user_id`, `user_name`, `user_password`,`user_full_name`');
		$this->db->from($this->db_table_name);
		$this->db->where('user_password',MD5($userData['password']));
		$this->db->where('user_name',$userData['userName']);
		$this->db->limit(1);		
		$g_User=$this->db->get();
		if($g_User->num_rows()==1){			
			return $g_User->result();
		}
		else
			return false;
		
		
	}
	
}