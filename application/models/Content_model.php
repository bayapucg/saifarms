<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_home_page_aboutus(){
		$this->db->select('*')->from('home_page_about');		
		$this->db->where('h_p_a_id',1);
        return $this->db->get()->row_array();	
	}
	public function get_home_page_aboutus_more(){
		$this->db->select('h_p_a_m_id,img_ab_icon,img_ab_image,ab_title,ab_subtitle')->from('home_page_about_more');		
		$this->db->where('h_p_a_id',1);
        return $this->db->get()->result_array();	
	}
	public function update_home_about($id,$d){
		$this->db->where('h_p_a_id',$id);
    	return $this->db->update("home_page_about",$d);
	}
	public  function save_home_about_imgs($d){
		$this->db->insert('home_page_about_more',$d);
		return $insert_id = $this->db->insert_id();
	}
	public function update_home_about_imgs($id,$d){
		$this->db->where('h_p_a_m_id',$id);
    	return $this->db->update("home_page_about_more",$d);
	}
	public  function get_home_about_imgs($id){
		$this->db->select('h_p_a_m_id,img_ab_icon,ab_image,ab_icon,img_ab_image,ab_title,ab_subtitle')->from('home_page_about_more');		
		$this->db->where('h_p_a_m_id',$id);
        return $this->db->get()->row_array();	
	}
	
	public  function remove_remve_homepage_about_img($id){
		$this->db->where('h_p_a_m_id',$id);
		return $this->db->delete('home_page_about_more');		
	}
	
	/* service */
	public function get_home_page_service(){
		$this->db->select('*')->from('home_page_service');		
		$this->db->where('h_p_s_id',1);
        return $this->db->get()->row_array();	
	}
	public function get_home_page_service_more(){
		$this->db->select('h_p_a_sm_id,h_p_s_id,s_title,s_subtitle')->from('home_page_service_more');		
		$this->db->where('h_p_s_id',1);
        return $this->db->get()->result_array();	
	}
	
	public  function update_home_service($id,$d){
		$this->db->where('h_p_s_id',$id);
    	return $this->db->update("home_page_service",$d);
	}
	public  function update_home_services_more($id,$d){
		$this->db->where('h_p_a_sm_id',$id);
    	return $this->db->update("home_page_service_more",$d);
	}
	public  function save_home_services_more($d){
		$this->db->insert('home_page_service_more',$d);
		return $insert_id = $this->db->insert_id();
	}
	public  function remove_remve_homepage_services($id){
		$this->db->where('h_p_a_sm_id',$id);
		return $this->db->delete('home_page_service_more');		
	}
	
	public  function get_home_page_factdetails(){
		$this->db->select('*')->from('home_page_fact_details');		
		$this->db->where('h_p_f_d_id',1);
        return $this->db->get()->row_array();
	}
	/* facet details */
	public  function update_home_fact($id,$d){
		$this->db->where('h_p_f_d_id',$id);
    	return $this->db->update("home_page_fact_details",$d);
	}
	/* founder details */
	public  function get_founder_details(){
		$this->db->select('*')->from('founder_details');		
		$this->db->where('f_d_id',1);
        return $this->db->get()->row_array();
	}
	public  function update_founder_details($id,$d){
		$this->db->where('f_d_id',$id);
    	return $this->db->update("founder_details",$d);
	}
	
	/* contact us */
	
	public  function get_contactus(){
		$this->db->select('*')->from('contactus_details');		
		$this->db->where('c_d_id',1);
        return $this->db->get()->row_array();
	}
	
	public  function update_contactus($id,$d){
		$this->db->where('c_d_id',$id);
    	return $this->db->update("contactus_details",$d);
	}
	
	/* about us */
	public  function update_aboutus($id,$d){
		$this->db->where('ab_id',$id);
    	return $this->db->update("aboutus_details",$d);
	}
	public  function get_about_d(){
		$this->db->select('*')->from('aboutus_details');		
		$this->db->where('ab_id',1);
        return $this->db->get()->row_array();
	}
}