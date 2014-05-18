<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
Class Catology_model extends CI_Model
{
	private $db_table_name='demo_loaisanpham';
	function __construct()
	{ 
		parent::__construct(); 
	}	
	public function getListLoai()
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
	public function entry_insert($data)
	{		
		$this->db->insert($this->db_table_name,$data);		
	}
	public function getHtmlListCatology()
	{
		//$sql='';
		$this->db->select('*');
		$this->db->from($this->db_table_name);
		$g_Loai=$this->db->get();
		$gResult=array();
		$gTemp=array();
		if($g_Loai->num_rows()>=1){			
			$gTemp=$g_Loai->result_array() ;
			//print_r($gTemp);
			$i=0;
            while(count($gTemp)>0 and $i<count($gTemp)){ 
				$data=$gTemp[$i];				
				if($data['parent_id']==0)
				{
					array_push($gResult,$data);
					unset($gTemp[$i]);//=array_diff($gTemp,array($data));
				}
				$i++;
			}
			print_r($gTemp);
			$i=0;
			while(count($gTemp)>0 and $i<count($gTemp))
			{
			  $data=$gTemp[$i];
			  foreach($gResult as $data2){
				if($data2['loai_id']==$data['parent_id']){
					array_push($gResult,$data);
					unset($gTemp[$i]);//=array_diff($gTemp,array($data));
				}
			  }
			  $i++;
			}
			
			return $gResult;
		}
		return false;
	}	
}
