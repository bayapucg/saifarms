<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Frontend.php');
class Home extends Frontend {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Home_model');		
		
	}
	public function index()
	{	
		
		$data['home_banners']=$this->Home_model->get_home_banners();
		$data['home_abt_cnt']=$this->Home_model->get_about_content(1);
		$data['home_service']=$this->Home_model->get_home_service(1);
		$data['home_fact']=$this->Home_model->get_home_fact(1);
		$data['home_founder']=$this->Home_model->get_founder_details(1);
		$data['testimonials']=$this->Home_model->get_testimonials();
		$data['v_list']=$this->Home_model->get_videos();
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/index',$data);
		$this->load->view('html/footer');
		$this->load->view('html/footer-links');
	}
	
	
	
	
}
