<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
Class Catology_model extends CI_Model
{
	private $db_table_name='demo_loaisanpham';
	function __construct()
	{ 
		parent::__construct(); 
	}	
	function getListLoai()
	{
		$this->db->select('`loai_id`, `loai_name`');
		$this->db->from($this->db_table_name);
		$this->db->where('`parent_id`',0);
		$g_Loai=$this->db->get();
		$gResult=array();
		if($g_Loai->num_rows()>=1){
			//print_r($g_Loai);
			foreach($g_Loai->result() as $data){			    
				array_push($gResult,array('id'=>$data->loai_id,'name'=>$data->loai_name));
			}
			return $gResult;
		}
		return false;
	}
	function entry_insert($data)
	{		
		$this->db->insert($this->db_table_name,$data);		
	}
	
}