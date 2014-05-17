<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
		}
		function isLogin()
		{
			return $this->session->userdata('logged_in');
		}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	  $this->load->view('flatdream/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */