<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Frontend.php');
class Aboutus extends Frontend {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Home_model');		
		
	}
	public function index()
	{	
		
		$data['ab_d']=$this->Home_model->get_about_d();
		$this->load->view('html/about-us',$data);
		$this->load->view('html/footer');
		$this->load->view('html/footer-links');
	}
	
	
	
	
}
