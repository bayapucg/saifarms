<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Frontend.php');
class Services extends Frontend {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Home_model');		
		
	}
	public function index()
	{	
		
		$this->load->view('html/gallery');
		$this->load->view('html/footer');
		$this->load->view('html/footer-links');
	}
	public function details()
	{	
		
		$sid=base64_decode($this->uri->segment(3));
		if($sid==''){
			redirect('');
		}
		$data['s_d']=$this->Home_model->get_service_details($sid);
		$this->load->view('html/service-detais',$data);
		$this->load->view('html/footer');
		$this->load->view('html/footer-links');
	}
	
	
	
	
}
