<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->view('html/header-links');
		$this->load->model('Home_model');
		$data['s_list']=$this->Home_model->get_services_list();
		$this->load->view('html/header',$data);
	}
	
}
