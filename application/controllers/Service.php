<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Service extends sidebar {
	public function __construct() {
        parent::__construct();
        $this->load->model('Galleries_model');
    	
    }
    public function index(){
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$data['s_list']=$this->Galleries_model->get_services_list($l_data['id']);
			$this->load->view('service/list',$data);
			$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
    } 
	public function add(){
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$this->load->view('service/add');
			$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
    }
	public function edit(){
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$data['n_d']=$this->Galleries_model->get_dervice_details(base64_decode($this->uri->segment(3)));
			$this->load->view('service/edit',$data);
			$this->load->view('admin/footer');
			$this->load->view('admin/footer-links');
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
    }    
    public function addpost(){
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$post=$this->input->post();
			//echo '<pre>';print_r($_FILES);exit;
			if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"]!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$orgimg =$_FILES["image"]["name"];
				$img =round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/serices/" . $img);
			}
			$add=array(
			'name'=>isset($post['name'])?$post['name']:'',
			'b_description'=>isset($post['b_description'])?$post['b_description']:'',
			'description'=>isset($post['description'])?$post['description']:'',
			'image'=>isset($img)?$img:'',
			'org_image'=>isset($orgimg)?$orgimg:'',
			'created_at'=>date('Y-m-d H:i;s'),
			'created_by'=>isset($l_data['id'])?$l_data['id']:'',
			);
			$save=$this->Galleries_model->save_service($add);
			if(count($save)>0){
				$this->session->set_flashdata('success',"Service added successfully");
				redirect('service');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('service/add');
			}
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	} 
	public function editpost(){
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$post=$this->input->post();
			$sd=$this->Galleries_model->get_service_details($post['s_id']);
			//echo '<pre>';print_r($post);exit;
			if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"]!=''){
				unlink('assets/serices/'.$sd['image']);
				$temp = explode(".", $_FILES["image"]["name"]);
				$orgimg =$_FILES["image"]["name"];
				$img =round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/serices/" . $img);
			}else{
				$img=$sd['image'];
				$orgimg=$sd['org_image'];
			}
			$u_data=array(
			'name'=>isset($post['name'])?$post['name']:'',
			'b_description'=>isset($post['b_description'])?$post['b_description']:'',
			'description'=>isset($post['description'])?$post['description']:'',
			'image'=>isset($img)?$img:'',
			'org_image'=>isset($orgimg)?$orgimg:'',
			'updated_at'=>date('Y-m-d H:i;s'),
			);
			$update=$this->Galleries_model->service_update($post['s_id'],$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Service updated successfully");
				redirect('service');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('service/edit/'.base64_encode($post['s_id']));
			}
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	
	public  function status(){
			$b_id=base64_decode($this->uri->segment(3));
			$statu=base64_decode($this->uri->segment(4));
			if($statu==1){
				$st=0;	
			}else{
				$st=1;
			}
			$u_data=array(
			'status'=>$st,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->Galleries_model->service_update($b_id,$u_data);
			if(count($update)>0){
				if($statu==0){
					$this->session->set_flashdata('success',"Service activated successfully");
				}else{
					$this->session->set_flashdata('success',"Service deactivated successfully");
				}
				redirect('service');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('service');
			}
		
	}
	public  function delete(){
			$b_id=base64_decode($this->uri->segment(3));
			$t_d=$this->Galleries_model->get_service_details($b_id);
			$update=$this->Galleries_model->servicedelete($b_id);
			if(count($update)>0){
				unlink('assets/serices/'.$t_d["image"]);
				$this->session->set_flashdata('success',"Service deleted successfully");
				redirect('service');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('service');
			}
		
	}
    
    

}