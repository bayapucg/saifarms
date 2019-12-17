<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Frontend.php');
class Contactus extends Frontend {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Home_model');		
		
	}
	public function index()
	{	
		
		$data['c_d']=$this->Home_model->get_contactus();
		$this->load->view('html/contactus',$data);
		$this->load->view('html/footer');
		$this->load->view('html/footer-links');
	}
	public  function post(){
		
		
		$post=$this->input->post();
		
		$addcontact=array(
		'name'=>isset($post['name'])?$post['name']:'',
		'mobile'=>isset($post['mobile'])?$post['mobile']:'',
		'email'=>isset($post['email'])?$post['email']:'',
		'message'=>isset($post['message'])?$post['message']:'',
		'create_at'=>date('Y-m-d H:i:s'),
		);
		
		//echo '<pre>';print_r($post);exit;
		$save=$this->Home_model->save_contactus($addcontact);
		if(count($save)>0){
				$c_d=$this->Home_model->get_contactus();
				//echo '<pre>';print_r($c_d);exit;
				$data['details']=$post;
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->from($post['email']);
				$this->email->to($c_d['email']);
				$this->email->subject('Contact us - Request');

				$msg='Name:'.$post['name'].'<br> Email :'.$post['email'].'<br> Phone  number :'.$post['mobile'].'<br> Message :'.$post['message'];
				$this->email->message($msg);
				//echo $body;exit;
				$this->email->send();
				
				//echo "test";exit;
				$this->session->set_flashdata('success',"Your message was successfully sent.");
				redirect('contactus');
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('contactus');
			}
		//echo '<pre>';print_r($post);exit;
		
	}
	
	
	
	
}
