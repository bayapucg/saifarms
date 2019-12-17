<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Galleries extends sidebar {
	public function __construct() {
        parent::__construct();
        $this->load->model('Galleries_model');
    	
    }
    public function index(){
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$data['n_list']=$this->Galleries_model->get_images_list($l_data['id']);
			$this->load->view('gallery/list',$data);
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
			$this->load->view('gallery/add');
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
			$this->load->view('gallery/edit',$data);
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
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/galleries/" . $img);
			}
			$add=array(
			'name'=>isset($post['name'])?$post['name']:'',
			'image'=>isset($img)?$img:'',
			'org_image'=>isset($orgimg)?$orgimg:'',
			'created_at'=>date('Y-m-d H:i;s'),
			'created_by'=>isset($l_data['id'])?$l_data['id']:'',
			);
			$save=$this->Galleries_model->save($add);
			if(count($save)>0){
				$this->session->set_flashdata('success',"Image added successfully");
				redirect('galleries');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('galleries/add');
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
			$update=$this->Galleries_model->update($b_id,$u_data);
			if(count($update)>0){
				if($statu==0){
					$this->session->set_flashdata('success',"image activated successfully");
				}else{
					$this->session->set_flashdata('success',"image deactivated successfully");
				}
				redirect('galleries');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('galleries');
			}
		
	}
	public  function delete(){
			$b_id=base64_decode($this->uri->segment(3));
			$t_d=$this->Galleries_model->get_images_details($b_id);
			$update=$this->Galleries_model->img_delete($b_id,$u_data);
			if(count($update)>0){
				unlink('assets/galleries/'.$t_d["image"]);
				$this->session->set_flashdata('success',"Image deleted successfully");
				redirect('galleries');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('galleries');
			}
		
	}
    
    

}