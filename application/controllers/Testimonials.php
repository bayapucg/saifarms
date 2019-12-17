<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Testimonials extends sidebar {
	public function __construct() {
        parent::__construct();
        $this->load->model('Testimonials_model');
    	
    }
    public function index(){
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$data['n_list']=$this->Testimonials_model->get_noti_list($l_data['id']);
			$this->load->view('testimonials/list',$data);
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
			$this->load->view('testimonials/add');
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
			$data['n_d']=$this->Testimonials_model->get_noti_details(base64_decode($this->uri->segment(3)));
			$this->load->view('testimonials/edit',$data);
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
			if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"]!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$orgimg =$_FILES["image"]["name"];
				$img =round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/testimonials/" . $img);
			}
			$add=array(
			'name'=>isset($post['name'])?$post['name']:'',
			'message'=>isset($post['msg'])?$post['msg']:'',
			'text'=>isset($post['text'])?$post['text']:'',
			'image'=>isset($img)?$img:'',
			'created_at'=>date('Y-m-d H:i;s'),
			'created_by'=>isset($l_data['id'])?$l_data['id']:'',
			);
			$save=$this->Testimonials_model->save($add);
			if(count($save)>0){
				$this->session->set_flashdata('success',"Testimonials added successfully");
				redirect('testimonials');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('testimonials/add');
			}
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function editpost(){
		if($this->session->userdata('sai_f'))
		{
			$post=$this->input->post();
			$t_d=$this->Testimonials_model->get_noti_details($post['t_id']);
			if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"]!=''){
				unlink('assets/testimonials/'.$t_d["image"]);
				$temp = explode(".", $_FILES["image"]["name"]);
				$orgimg =$_FILES["image"]["name"];
				$img =round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/testimonials/" . $img);
			}else{
				$img =$t_d["image"];
			}
			$add=array(
			'name'=>isset($post['name'])?$post['name']:'',
			'text'=>isset($post['text'])?$post['text']:'',
			'message'=>isset($post['msg'])?$post['msg']:'',
			'image'=>isset($img)?$img:'',
			'updated_at'=>date('Y-m-d H:i;s'),
			);
			$save=$this->Testimonials_model->update($post['t_id'],$add);
			if(count($save)>0){
				$this->session->set_flashdata('success',"Testimonials updated successfully");
				redirect('testimonials');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('testimonials/edit/'.base64_encode($post['t_id']));
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
			$update=$this->Testimonials_model->update($b_id,$u_data);
			if(count($update)>0){
				if($statu==0){
					$this->session->set_flashdata('success',"Testimonials activated successfully");
				}else{
					$this->session->set_flashdata('success',"Testimonials deactivated successfully");
				}
				redirect('testimonials');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('testimonials');
			}
		
	}
	public  function delete(){
			$b_id=base64_decode($this->uri->segment(3));
			$u_data=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$t_d=$this->Testimonials_model->get_noti_details($b_id);
			$update=$this->Testimonials_model->update($b_id,$u_data);
			if(count($update)>0){
				unlink('assets/testimonials/'.$t_d["image"]);
				$this->session->set_flashdata('success',"Notification deleted successfully");
				redirect('testimonials');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('testimonials');
			}
		
	}
    
    

}