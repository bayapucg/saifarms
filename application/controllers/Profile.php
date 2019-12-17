<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Profile extends sidebar {
	public function __construct() 
	{
		parent::__construct();	
		$this->load->model('User_model');
	}
	public function index()
	{	
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$data['userdetails']=$this->Admin_model->get_user_details($l_data['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/profile',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
	public function edit()
	{
		if($this->session->userdata('sai_f'))
		{
				$l_data=$this->session->userdata('sai_f');
				$data['userdetails']=$this->Admin_model->get_user_details($l_data['id']);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/profile-edit',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function editpost()
	{
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$post=$this->input->post();
			$userdetails=$this->Admin_model->get_user_details($l_data['id']);
			//echo '<pre>';print_r($post);exit;
			if($userdetails['email']!=$post['email']){
				
				$check_email=$this->Admin_model->check_email_exits($post['email']);
				if(count($check_email)>0){
					$this->session->set_flashdata('error',"Email address already exists. Please another email address.");
					redirect('profile/edit');
				}
			}
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						unlink('assets/profile_pic/'.$userdetails['profile_pic']);
							$temp = explode(".", $_FILES["image"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/profile_pic/" . $image);
						}else{
							$image=$userdetails['profile_pic'];
						}
					$updatedetails=array(
					'name'=>isset($post['name'])?$post['name']:'',
					'email'=>isset($post['email'])?$post['email']:'',
					'mobile'=>isset($post['phone'])?$post['phone']:'',
					'address'=>isset($post['address'])?$post['address']:'',
					'notes'=>isset($post['notes'])?$post['notes']:'',
					'profile_pic'=>$image,
					'updated_at'=>date('Y-m-d H:i:s'),
					);				
			$profile_update=$this->Admin_model->update_admin_details($l_data['id'],$updatedetails);
			if(count($profile_update)>0){
				$this->session->set_flashdata('success','Profile Details successfully Updated');
				redirect('profile');
				
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('profile/edit');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function changepassword()
	{
		if($this->session->userdata('sai_f'))
		{
			$admindetails=$this->session->userdata('userdetails');
				$this->load->view('admin/changepassword');
				$this->load->view('admin/footer');
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function changepasswordpost(){
	 
		if($this->session->userdata('sai_f'))
		{
			$admindetails=$this->session->userdata('sai_f');
			$post=$this->input->post();
			$admin_details = $this->Admin_model->get_adminpassword_details($admindetails['id']);
			if($admin_details['pwd']== md5($post['oldpassword'])){
				if(md5($post['password'])== md5($post['confirmpassword'])){
						$updateuserdata=array(
						'pwd'=>md5($post['confirmpassword']),
						'org_password'=>$post['confirmpassword'],
						'updated_at'=>date('Y-m-d H:i:s'),
						);
						//echo '<pre>';print_r($updateuserdata);exit;
						$upddateuser = $this->Admin_model->update_admin_details($admindetails['id'],$updateuserdata);
						if(count($upddateuser)>0){
							$this->session->set_flashdata('success',"password successfully updated");
							redirect('profile');
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('profile/changepassword');
						}
					
				}else{
					$this->session->set_flashdata('error',"Password and Confirm password are not matched");
					redirect('profile/changepassword');
				}
				
			}else{
				$this->session->set_flashdata('error',"Old password are not matched");
				redirect('profile/changepassword');
			}
				
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		} 
	 
	}
	
}
