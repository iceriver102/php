<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//$this->session->set_userdata('logged_in', false); 
		#Tai thu vien
		$this->load->helper(array('form')); 
		$this->load->library(array('form_validation'));
		
		#Tai model
		$this->load->model(array('login_model'));
		   
	}	
	
	function is_logged_in(){
		return $this->session->userdata('logged_in');
	}	
	public function index()
	{
		if($this->is_logged_in())
		{
			redirect(base_url().'administrator/dashboard','location');
		}else
		{
			$this->load->view('flatdream/pages-login');
		}
	}
	public function submit()
	{	
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean'); 
		$this->form_validation->set_rules('password', 'Password', 'required'); 
		if($this->form_validation->run()==True)
		{
			$g_UserData['userName']=$this->input->post('username');
			$g_UserData['password']=$this->input->post('password');
			$g_UserChecking=$this->login_model->checkUser($g_UserData);
			if($g_UserChecking!==false){
				$this->session->set_userdata('logged_in', true); 
				$this->session->set_userdata('user', $g_UserChecking); 
				//print_r($g_UserChecking);
				redirect(base_url().'administrator/dashboard','location');
			}else{
				$this->session->set_userdata('logged_in', false); 
				$this->b_Check = false;
				$a_Data['b_Check']= $this->b_Check;
				$a_Data['msg']='Tên đăng nhập và mật khẩu không đúng!';				
				$this->load->view('flatdream/pages-login', $a_Data);
			}
		}else
		{
			$a_Data['b_Check']=false;
			$a_Data['msg']='Dữ liệu không đúng định dạng';
			$this->load->view('flatdream/pages-login', $a_Data);
		}
	}
	public function logout(){ 
		$this->session->set_userdata('logged_in', false); 
		$this->session->unset_userdata('user');	// Unset session of user 
		redirect('login','index'); 
	}
}