<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Galleries_model extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    public  function save($d){
		$this->db->insert('galleries',$d);
		return $this->db->insert_id();
	}
	public  function get_images_list($id){
		$this->db->select('g.g_id,g.image,g.org_image,g.name,g.status,g.created_at')->from('galleries as g');
		$this->db->where('g.created_by',$id);
		$this->db->where('g.status !=',2);
		return $this->db->get()->result_array();		
	}
	public  function get_images_details($id){
		$this->db->select('g.g_id,g.image,g.org_image,g.name,g.status,g.created_at')->from('galleries as g');
		$this->db->where('g.g_id',$id);
		return $this->db->get()->row_array();		
	}
	public  function update($id,$d){
		$this->db->where('g_id',$id);
		return $this->db->update('galleries',$d);		
	}
	public  function img_delete($id){
		$this->db->where('g_id',$id);
		return $this->db->delete('galleries');		
	}
	
	/* service */
	public  function save_service($d){
		$this->db->insert('services',$d);
		return $this->db->insert_id();
	}
	public  function get_services_list($id){
		$this->db->select('s.s_id,s.name,s.b_description,s.description,s.image,s.org_image,s.status,s.created_at')->from('services as s');
		$this->db->where('s.created_by',$id);
		$this->db->where('s.status !=',2);
		return $this->db->get()->result_array();		
	}
	public  function service_update($id,$d){
		$this->db->where('s_id',$id);
		return $this->db->update('services',$d);		
	}
	public  function get_dervice_details($id){
		$this->db->select('s.s_id,s.name,s.b_description,s.description,s.image,s.org_image,s.status,s.created_at')->from('services as s');
		$this->db->where('s.s_id',$id);
		return $this->db->get()->row_array();		
	}
	public  function get_service_details($id){
		$this->db->select('s.s_id,s.name,s.b_description,s.description,s.image,s.org_image,s.status,s.created_at')->from('services as s');
		$this->db->where('s.s_id',$id);
		return $this->db->get()->row_array();
	}
	public  function servicedelete($id){
		$this->db->where('s_id',$id);
		return $this->db->delete('services');		
	}
	
}