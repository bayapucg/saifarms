<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Testimonials_model extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    public  function save($d){
		$this->db->insert('testimonials',$d);
		return $this->db->insert_id();
	}
	public  function get_noti_list($id){
		$this->db->select('t.t_id,t.name,t.message,t.image,t.status,t.text,t.created_at')->from('testimonials as t');
		$this->db->where('t.created_by',$id);
		$this->db->where('t.status !=',2);
		return $this->db->get()->result_array();		
	}
	public  function get_noti_details($id){
		$this->db->select('t.t_id,t.name,t.message,t.image,t.status,t.text,t.created_at')->from('testimonials as t');
		$this->db->where('t.t_id',$id);
		return $this->db->get()->row_array();		
	}
	public  function update($id,$d){
		$this->db->where('t_id',$id);
		return $this->db->update('testimonials',$d);		
	}
}