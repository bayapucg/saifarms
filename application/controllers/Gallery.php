<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Frontend.php');
class Gallery extends Frontend {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Home_model');		
		
	}
	public function index()
	{	
		
		$data['img_list']=$this->Home_model->get_img_list();
		$this->load->view('html/gallery',$data);
		$this->load->view('html/footer');
		$this->load->view('html/footer-links');
	}
	
	
	
	
}
