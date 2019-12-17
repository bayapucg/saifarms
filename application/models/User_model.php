<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save_role($data){
		$this->db->insert('role_name',$data);
		return $this->db->insert_id();
	}
	public  function save_role_options($data){
		$this->db->insert('role_options',$data);
		return $this->db->insert_id();
	}
	public  function check_role_name($id,$name){
		$this->db->select('r_n_id')->from('role_name');
		$this->db->where('m_id',$id);
		$this->db->where('role_name',$name);
		return $this->db->get()->row_array();
	}
	public  function get_roles_list(){
		$this->db->select('rn.r_n_id,rn.role_name,rn.status,rn.created_at,m.m_name as mname,GROUP_CONCAT(mm.m_menu_name) as options')->from('role_options as ro');
		$this->db->join('modules_menu as mm','mm.m_m_id=ro.r_option_id','left');
		$this->db->join('modules as m','m.m_id=mm.m_name','left');
		$this->db->join('role_name as rn','rn.r_n_id=ro.r_n_id','left');
		$this->db->where('rn.status !=',2);
		$this->db->group_by('rn.r_n_id');
		return $this->db->get()->result_array();
	}
	public  function update_rolename($id,$data){
		$this->db->where('r_n_id',$id);
		return $this->db->update('role_name',$data);
	}
	public  function get_rolename_details($id){
		$this->db->select('r_n_id,m_id,role_name')->from('role_name');
		$this->db->where('r_n_id',$id);
		$return=$this->db->get()->row_array();
		$options=$this->get_roleoption($return['r_n_id']);
		$data=$return;
		$data['option']=$options;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_roleoption($id){
		$this->db->select('r_p_id,r_option_id')->from('role_options');
		$this->db->where('r_n_id',$id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_option_list($id){
		$this->db->select('m_m_id,m_menu_name')->from('modules_menu');
		$this->db->where('m_name',$id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function update_role($id,$data){
		$this->db->where('r_n_id',$id);
		return $this->db->update('role_name',$data);
	}
	
	public  function delete_role_options($id,$p_id){
		$this->db->where('r_n_id',$id);
		$this->db->where('r_option_id',$p_id);
		return $this->db->delete('role_options');
	}
	// add user
	public  function get_active_roles_list(){
		$this->db->select('r_n_id,m_id,role_name')->from('role_name');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public function check_email($mail,$mob){
		$sql = "SELECT a_id FROM admin WHERE (email ='".$mail."' AND  status !=2) OR (mobile ='".$mob."' AND status !=2)";
		return $this->db->query($sql)->row_array();
	}
	public  function save_user($add){
		$this->db->insert('admin',$add);
		return $this->db->insert_id();
	}
	public  function get_role_option_names($id){
		$this->db->select('r.r_p_id,r.r_option_id,r.r_n_id,rn.m_id')->from('role_options as r');
		$this->db->join('role_name as rn','rn.r_n_id=r.r_n_id','left');
		$this->db->where('r.r_n_id',$id);
		$this->db->where('r.status',1);
		return $this->db->get()->result_array();
	}
	public  function save_user_privileges($data){
		$this->db->insert('user_role_privileges',$data);
		return $this->db->insert_id();
	}
	public  function get_active_user_list($a_id){
		$this->db->select('a_id,role_id,name,email,mobile,status,created_at')->from('admin');
		$this->db->where('created_by',$a_id);
		$this->db->where('status !=',2);
		$this->db->where('role_id !=',2);
		return $this->db->get()->result_array();
	}
	public  function update_user($id,$data){
		$this->db->where('a_id',$id);
		return $this->db->update('admin',$data);
	}
	public  function get_user_details($id){
		$this->db->select('a_id,name,role_id,email,mobile,status,address,created_at')->from('admin');
		$this->db->where('a_id',$id);
		return $this->db->get()->row_array();	
	}
	public  function get_role_details($a_id){
		$this->db->select('u_r_p_id,r_n_id,m_m_id')->from('user_role_privileges');
		$this->db->where('u_id',$a_id);
		return $this->db->get()->result_array();
	}
	public  function get_module_role_details($a_id,$m_id){
		$this->db->select('u_r_p_id,r_n_id,m_m_id')->from('user_role_privileges');
		$this->db->where('u_id',$a_id);
		$this->db->where('m_id',$m_id);
		return $this->db->get()->result_array();
	}
	public  function delete_privileges($a_id){
		$this->db->where('u_id',$a_id);
		return $this->db->delete('user_role_privileges');
	}
	//user right 
	public  function get_active_users_list($a_id){
		$this->db->select('a_id,name')->from('admin');
		$this->db->where('created_by',$a_id);
		$this->db->where('status',1);
		$this->db->where('role_id',2);
		return $this->db->get()->result_array();
	}
	public  function get_per_active_users_list($a_id){
		$this->db->select('a_id,name')->from('admin');
		$this->db->where('created_by',$a_id);
		$this->db->where('status',1);
		$this->db->where('role_id !=',2);
		return $this->db->get()->result_array();
	}
	public  function get_active_module_list(){
		$this->db->select('m_id,m_name')->from('modules');
		$this->db->where('m_status',1);
		return $this->db->get()->result_array();
	}
	public  function get_module_menu($id,$u_id){
		$this->db->select('mm.m_m_id,mm.m_name,mm.m_menu_name,up.u_r_p_id')->from('modules_menu as mm');
		$this->db->join('user_role_privileges as up','up.m_m_id = mm.m_m_id','right');
		$this->db->where('mm.m_name',$id);
		$this->db->where('up.u_id',$u_id);
		$this->db->where('mm.status',1);
		return $this->db->get()->result_array();
	}
	public  function get_menu_module_menu($id){
		$this->db->select('mm.m_m_id,mm.m_name,mm.m_menu_name')->from('modules_menu as mm');
		$this->db->where('mm.m_name',$id);
		$this->db->where('mm.status',1);
		return $this->db->get()->result_array();
	}
	public  function delete_role_options_list($id){
		$this->db->where('u_r_p_id',$id);
		return $this->db->delete('user_role_privileges');
	}
	public  function get_department_list(){
		$this->db->select('d.d_id,d.name')->from('department as d');
		$this->db->where('d.status',1);
		return $this->db->get()->result_array();
	}
	public  function get_user_department_list($id){
		$this->db->select('d.d_id,d.u_d_id')->from('user_departments as d');
		$this->db->where('d.a_id',$id);
		$this->db->where('d.status',1);
		return $this->db->get()->result_array();
	}	
	public  function save_user_departments($d){
		$this->db->insert('user_departments',$d);
		return $this->db->insert_id();
	}
	
	public function update_user_departments($aid,$did,$d){
		$this->db->where('a_id',$aid);
		$this->db->where('d_id',$did);
		$this->db->where('status',1);
		return $this->db->update('user_departments',$d);
	}
	
	public function delete_departments($id,$d){
		$this->db->where('u_d_id',$id);
		return $this->db->update('user_departments',$d);
	}
	
	
	
	
  }