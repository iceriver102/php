<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Catology extends CI_Controller {
	function __construct()
		{
		   parent::__construct();	
		   if(!$this->isLogin())
		   {
				redirect(base_url().'administrator/login','location');
		   }
		  
			foreach($this->session->userdata('user') as $row){				
				$this->curUser= new User();
				$this->curUser->getDateUser($row);
		    }
			
			$this->load->helper(array('form')); 
			$this->load->library(array('form_validation'));
			
			
			$this->load->model(array('catology_model'));
			$this->load->model(array('datatable'));
			
		  
		}
	function isLogin()
	{
		return $this->session->userdata('logged_in');
	}
	public function dataTable()
	{
		$this->datatable->getData=$_GET;
		$this->datatable->sTable='demo_loaisanpham';
		$this->datatable->sIndexColumn='loai_id';
		$this->datatable->aColumns=array('loai_id', 'loai_name', 'loai_content', 'loai_status', 'loai_datetime', 'parent_id', 'loai_tags');
		echo json_encode($this->datatable->output());
	}
	
	public function index($data=null)
	{
		//print_r($this->curUser);
		$this->load->view('flatdream/catology_list',$data);		
	}
	function create(){
		$this->dataLoai=$this->catology_model->getListLoai();		
		$this->load->view('flatdream/catology_create');
	}
	function insertData()
	{
		$this->form_validation->set_rules('name_loai', 'name_loai', 'trim|required|xss_clean'); 
		if($this->form_validation->run()==True)
		{
			$status=$this->input->post('status');
			if($status=='')
				$status=0;
			$data=array(
			'`loai_name`'=>$this->input->post('name_loai') ,
			'`loai_content`'=>$this->input->post('content') ,
			'`loai_status`' =>$status,			
			'`parent_id`'=>$this->input->post('id_parent') ,
			'`loai_tags`'=>$this->input->post('tags')
			);
			$this->catology_model->entry_insert($data);
			$a_Data['b_Check']=true;
			$a_Data['msg']='Thêm loại sản phẩm thành công';
		    $this->index($a_Data);
		}
		else{
			$a_Data['b_Check']=false;
			$a_Data['msg']='Dữ liệu không đúng định dạng';
		}
		
	}
}