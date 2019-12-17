<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function get_home_banners(){
		$this->db->select('title,image,org_image')->from('home_banners');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_about_content($id){
		$this->db->select('h_p_a_id,text')->from('home_page_about');
		$this->db->where('status',$id);
		$return=$this->db->get()->row_array();
		$imgs=$this->get_home_about_moreimages($return['h_p_a_id']);
		$data=$return;
		$data['abt_imgs']=$imgs;
		if(!empty($data)){
			return $data;
		}
	}
	public function get_home_about_moreimages($id){
		$this->db->select('h_p_a_m_id,img_ab_icon,img_ab_image,ab_title,ab_subtitle,ab_image,ab_icon')->from('home_page_about_more');		
		$this->db->where('h_p_a_id',$id);
        return $this->db->get()->result_array();
	}
	public  function get_home_service($id){
		$this->db->select('h_p_s_id,text')->from('home_page_service');
		$this->db->where('status',$id);
		$return=$this->db->get()->row_array();
		$h_ser=$this->get_home_moreservice($return['h_p_s_id']);
		$datas=$return;
		$datas['h_service']=$h_ser;
		if(!empty($datas)){
			return $datas;
		}
	}
	public function get_home_moreservice($id){
		$this->db->select('h_p_a_sm_id,s_title,s_subtitle')->from('home_page_service_more');		
		$this->db->where('h_p_s_id',$id);
        return $this->db->get()->result_array();
	}
	public function get_home_fact($id){
		$this->db->select('text,sheaps,goats,country_birds,hard_workers')->from('home_page_fact_details');		
		$this->db->where('h_p_f_d_id',$id);
        return $this->db->get()->row_array();
	}
	public function get_founder_details($id){
		$this->db->select('name,email,mobile,text,image')->from('founder_details');		
		$this->db->where('f_d_id',$id);
        return $this->db->get()->row_array();
	}
	public function get_testimonials(){
		$this->db->select('name,text,message,image')->from('testimonials');		
		$this->db->where('status',1);
        return $this->db->get()->result_array();
	}
	public function get_img_list(){
		$this->db->select('image,org_image,name')->from('galleries');		
		$this->db->where('status',1);
        return $this->db->get()->result_array();
	}
	public function get_contactus(){
		$this->db->select('*')->from('contactus_details');		
		$this->db->where('c_d_id',1);
        return $this->db->get()->row_array();
	}
	public  function save_contactus($d){
		$this->db->insert('contact_list',$d);
		return $this->db->insert_id();
	}
	public  function get_about_d(){
		$this->db->select('*')->from('aboutus_details');		
		$this->db->where('ab_id',1);
        return $this->db->get()->row_array();
	}
	
	public  function get_services_list(){
		$this->db->select('s_id,name')->from('services');		
		$this->db->where('status',1);
        return $this->db->get()->result_array();
	}
	public  function get_service_details($id){
		$this->db->select('s.s_id,s.name,s.b_description,s.description,s.image,s.org_image')->from('services as s');
		$this->db->where('s.s_id',$id);
		return $this->db->get()->row_array();	
	}
	
	
	
	
  }