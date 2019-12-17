<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Content extends sidebar {
	public function __construct() 
	{
		parent::__construct();	
	
		$this->load->model('Content_model');
	}
	public function index()
	{	
		if($this->session->userdata('sai_f'))
			{
			
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function home()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$data['home_about_d']=$this->Content_model->get_home_page_aboutus();
				$data['home_about_d_more']=$this->Content_model->get_home_page_aboutus_more();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/home_page_about_content',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function homeaboutpost()
	{	
		if($this->session->userdata('sai_f'))
			{
				$post=$this->input->post();
				$l_d=$this->session->userdata('sai_f');
				$a=array(
					'text'=>isset($post['text'])?$post['text']:'',
					'updated_at'=>date('Y-m-d h:i:s'),
					'created_by'=>isset($l_d['id'])?$l_d['id']:'',
				);
				//echo '<pre>';print_r($post);exit;
				$update=$this->Content_model->update_home_about(1,$a);
				if(count($update)>0){
						$cnt=0;foreach($post['ab_title'] as $lis){
								$hmd=$this->Content_model->get_home_about_imgs($post['h_p_a_m_id'][$cnt]);
								if($post['ab_title'][$cnt]!=''){
										if($_FILES['ab_image']['tmp_name'][$cnt]!=''){
											unlink('assets/allimages/'.$hmd['ab_image']);
											$temp = explode(".", $_FILES["ab_image"]["name"][$cnt]);
											$img =$cnt.round(microtime(true)) . '.' . end($temp);
											move_uploaded_file($_FILES['ab_image']['tmp_name'][$cnt], "assets/allimages/" . $img);
											$img_ab=isset($_FILES["ab_image"]["name"][$cnt])?$_FILES["ab_image"]["name"][$cnt]:'';
										}else{
											$img=$hmd['ab_image'];
											$img_ab=$hmd['img_ab_image'];
										}
										if($_FILES['ab_icon']['tmp_name'][$cnt]!=''){
											unlink('assets/allimages/'.$hmd['ab_icon']);
											$ictemp = explode(".", $_FILES["ab_icon"]["name"][$cnt]);
											$icimg =$cnt.$cnt.round(microtime(true)) . '.' . end($ictemp);
											move_uploaded_file($_FILES['ab_icon']['tmp_name'][$cnt], "assets/allimages/" . $icimg);
											$img_abi=isset($_FILES["ab_icon"]["name"][$cnt])?$_FILES["ab_icon"]["name"][$cnt]:'';
										}else{
											$icimg=$hmd['ab_icon'];
											$img_abi=$hmd['img_ab_icon'];
										}
										if($post['h_p_a_m_id'][$cnt]==0){
											$add=array(
												'h_p_a_id'=>1,
												'img_ab_image'=>isset($img_ab)?$img_ab:'',
												'img_ab_icon'=>isset($img_abi)?$img_abi:'',
												'ab_image'=>isset($img)?$img:'',
												'ab_icon'=>isset($icimg)?$icimg:'',
												'ab_title'=>isset($post["ab_title"][$cnt])?$post["ab_title"][$cnt]:'',
												'ab_subtitle'=>isset($post["ab_subtitle"][$cnt])?$post["ab_subtitle"][$cnt]:'',
												'created_at'=>date('Y-m-d H:i:s'),
												'created_by'=>isset($l_d['id'])?$l_d['id']:'',
											);
											$this->Content_model->save_home_about_imgs($add);
										}else{
											$ud=array(
												'img_ab_image'=>isset($img_ab)?$img_ab:'',
												'img_ab_icon'=>isset($img_abi)?$img_abi:'',
												'ab_image'=>isset($img)?$img:'',
												'ab_icon'=>isset($icimg)?$icimg:'',
												'ab_title'=>isset($post["ab_title"][$cnt])?$post["ab_title"][$cnt]:'',
												'ab_subtitle'=>isset($post["ab_subtitle"][$cnt])?$post["ab_subtitle"][$cnt]:'',
												'updated_at'=>date('Y-m-d H:i:s'),
											);
											$this->Content_model->update_home_about_imgs($post['h_p_a_m_id'][$cnt],$ud);
											
										}
								}
							$cnt++;
							}
				
					$this->session->set_flashdata('success',"Data updated successfully");
					redirect('content/home');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occurred. Please try again.");
					redirect('content/home');
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function service()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$data['home_service_d']=$this->Content_model->get_home_page_service();
				$data['home_service_d_more']=$this->Content_model->get_home_page_service_more();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/home_page_service_content',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function homeservicepost()
	{	
		if($this->session->userdata('sai_f'))
			{
				$post=$this->input->post();
				$l_d=$this->session->userdata('sai_f');
				$a=array(
					'text'=>isset($post['text'])?$post['text']:'',
					'updated_at'=>date('Y-m-d h:i:s'),
					'created_by'=>isset($l_d['id'])?$l_d['id']:'',
				);
				//echo '<pre>';print_r($post);exit;
				$update=$this->Content_model->update_home_service(1,$a);
				if(count($update)>0){
						$cnt=0;foreach($post['ab_title'] as $lis){
								if($post['ab_title'][$cnt]!=''){
										if($post['h_p_a_sm_id'][$cnt]==0){
											$add=array(
												'h_p_s_id'=>1,
												's_title'=>isset($post["ab_title"][$cnt])?$post["ab_title"][$cnt]:'',
												's_subtitle'=>isset($post["ab_subtitle"][$cnt])?$post["ab_subtitle"][$cnt]:'',
												'created_at'=>date('Y-m-d H:i:s'),
												'created_by'=>isset($l_d['id'])?$l_d['id']:'',
											);
											$this->Content_model->save_home_services_more($add);
										}else{
											$ud=array(
												's_title'=>isset($post["ab_title"][$cnt])?$post["ab_title"][$cnt]:'',
												's_subtitle'=>isset($post["ab_subtitle"][$cnt])?$post["ab_subtitle"][$cnt]:'',
												'updated_at'=>date('Y-m-d H:i:s'),
											);
											$this->Content_model->update_home_services_more($post['h_p_a_sm_id'][$cnt],$ud);
											
										}
								}
							$cnt++;
							}
				
					$this->session->set_flashdata('success',"Data updated successfully");
					redirect('content/service');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occurred. Please try again.");
					redirect('content/service');
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function remove_homepage_about_img(){
		if($this->session->userdata('sai_f'))
		{
				$post = $this->input->post();
				$hmd=$this->Content_model->get_home_about_imgs($post['h_p_a_m_id']);
				//echo '<pre>';print_r($hmd);exit;
				$remove=$this->Content_model->remove_remve_homepage_about_img($post['h_p_a_m_id']);
				if(count($remove) > 0)
				{
					unlink('assets/allimages/'.$hmd['ab_icon']);
					unlink('assets/allimages/'.$hmd['ab_image']);
					$data['msg']=1;
					echo json_encode($data);exit;	
				}
		}else{
			$this->session->set_flashdata('error',"Please log in or sign up to continue");
			redirect('user');
		}
	}
	public function remove_homepage_service_more(){
		if($this->session->userdata('sai_f'))
		{
				$post = $this->input->post();
				//echo '<pre>';print_r($hmd);exit;
				$remove=$this->Content_model->remove_remve_homepage_services($post['h_p_a_sm_id']);
				if(count($remove) > 0)
				{
					$data['msg']=1;
					echo json_encode($data);exit;	
				}
		}else{
			$this->session->set_flashdata('error',"Please log in or sign up to continue");
			redirect('user');
		}
	}
	public function factdetails()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$data['home_facet_d']=$this->Content_model->get_home_page_factdetails();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/home_page_factdetails_content',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function factpost()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$post=$this->input->post();
				$l_d=$this->session->userdata('sai_f');
				$a=array(
					'text'=>isset($post['text'])?$post['text']:'',
					'sheaps'=>isset($post['sheaps'])?$post['sheaps']:'',
					'goats'=>isset($post['goats'])?$post['goats']:'',
					'country_birds'=>isset($post['country_birds'])?$post['country_birds']:'',
					'hard_workers'=>isset($post['hard_workers'])?$post['hard_workers']:'',
					'updated_by'=>date('Y-m-d h:i:s'),
					'created_by'=>isset($l_d['id'])?$l_d['id']:'',
				);
				//echo '<pre>';print_r($post);exit;
				$update=$this->Content_model->update_home_fact(1,$a);
				if(count($update)>0){
					$this->session->set_flashdata('success',"Data updated successfully");
					redirect('content/factdetails');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occurred. Please try again.");
					redirect('content/factdetails');	
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function founderdetails()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$data['home_founder']=$this->Content_model->get_founder_details();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/home_page_founder_content',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function founderpost()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$post=$this->input->post();
				$home_founder=$this->Content_model->get_founder_details();
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							unlink('assets/profile_pic/'.$home_founder['image']);
							$temp = explode(".", $_FILES["image"]["name"]);
							$img = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/profile_pic/" . $img);
						}else{
							$image=$home_founder['image'];
						}
				$a=array(
					'text'=>isset($post['text'])?$post['text']:'',
					'name'=>isset($post['name'])?$post['name']:'',
					'email'=>isset($post['email'])?$post['email']:'',
					'mobile'=>isset($post['mobile'])?$post['mobile']:'',
					'image'=>isset($img)?$img:'',
					'updated_at'=>date('Y-m-d h:i:s'),
					'created_by'=>isset($l_d['id'])?$l_d['id']:'',
				);
				//echo '<pre>';print_r($post);exit;
				$update=$this->Content_model->update_founder_details(1,$a);
				if(count($update)>0){
					$this->session->set_flashdata('success',"Data updated successfully");
					redirect('content/founderdetails');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occurred. Please try again.");
					redirect('content/founderdetails');	
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function contactus()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$data['c_d']=$this->Content_model->get_contactus();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/home_page_contactus_content',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function contactpost()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$post=$this->input->post();
				$a=array(
					'text'=>isset($post['text'])?$post['text']:'',
					'email'=>isset($post['email'])?$post['email']:'',
					'mobile'=>isset($post['mobile'])?$post['mobile']:'',
					'address'=>isset($post['address'])?$post['address']:'',
					'fb'=>isset($post['fb'])?$post['fb']:'',
					'tw'=>isset($post['tw'])?$post['tw']:'',
					'pin'=>isset($post['pin'])?$post['pin']:'',
					'ln'=>isset($post['ln'])?$post['ln']:'',
					'you'=>isset($post['you'])?$post['you']:'',
					'updated_at'=>date('Y-m-d h:i:s'),
					'created_by'=>isset($l_d['id'])?$l_d['id']:'',
				);
				//echo '<pre>';print_r($post);exit;
				$update=$this->Content_model->update_contactus(1,$a);
				if(count($update)>0){
					$this->session->set_flashdata('success',"Data updated successfully");
					redirect('content/contactus');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occurred. Please try again.");
					redirect('content/contactus');	
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function aboutus()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$data['ab_d']=$this->Content_model->get_about_d();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/home_page_aboutus_content',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function aboutuspost()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				$a=array(
					'aboutus'=>isset($post['aboutus'])?$post['aboutus']:'',
					'choose_us'=>isset($post['choose_us'])?$post['choose_us']:'',
					'updated_at'=>date('Y-m-d h:i:s'),
					'created_by'=>isset($l_d['id'])?$l_d['id']:'',
				);
				//echo '<pre>';print_r($post);exit;
				$update=$this->Content_model->update_aboutus(1,$a);
				if(count($update)>0){
					$this->session->set_flashdata('success',"Data updated successfully");
					redirect('content/aboutus');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occurred. Please try again.");
					redirect('content/aboutus');	
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function homevideo()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				//echo '<pre>';print_r($data);exit;
				$this->load->view('videos/add');
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function homevideolist()
	{	
		if($this->session->userdata('sai_f'))
			{
				$l_data=$this->session->userdata('sai_f');
				//echo '<pre>';print_r($data);exit;
				$data['v_list']=$this->Content_model->get_video_list();
				$this->load->view('videos/list',$data);
				$this->load->view('admin/footer');
				$this->load->view('admin/footer-links');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function videoaddpost(){
		if($this->session->userdata('sai_f'))
		{
			$l_data=$this->session->userdata('sai_f');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"]!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$orgimg =$_FILES["image"]["name"];
				$img =round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/video/" . $img);
			}
			$u_data=array(
			 'name'=>isset($post['name'])?$post['name']:'',
			 'video'=>isset($img)?$img:'',
			 'org_name'=>isset($orgimg)?$orgimg:'',
			 'created_at'=>date('Y-m-d H:i:s'),
			 'created_by'=>date('Y-m-d H:i:s'),
			);
			$save=$this->Content_model->save_videos($u_data);
			if(count($save)>0){
				$this->session->set_flashdata('success',"video added successfully");
				redirect('content/homevideolist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('content/homevideo');
			}
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public  function videostatus(){
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
			$update=$this->Content_model->video_update($b_id,$u_data);
			if(count($update)>0){
				if($statu==0){
					$this->session->set_flashdata('success',"video activated successfully");
				}else{
					$this->session->set_flashdata('success',"video deactivated successfully");
				}
				redirect('content/homevideolist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('content/homevideolist');
			}
		
	}
	public  function videodelete(){
			$b_id=base64_decode($this->uri->segment(3));
			$details=$this->Content_model->get_video_details($b_id);
			$update=$this->Content_model->delete_video($b_id);
			if(count($update)>0){
				unlink('assets/video/'.$details['video']);
				$this->session->set_flashdata('success',"video deleted successfully");
				redirect('content/homevideolist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('content/homevideolist');
			}
		
	}
	
	
	
}
