<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {
	
	public function __construct(){

	}

	public function get_all_users(){
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function deleteUser(){

		$this->db->delete('users', array('users_id' => $this->input->post('id'))); 

	}
	
	public function activateUser(){

	 $arrDataUsers=array(
		'users_active'=>1,
    );
    $this->db->set($arrDataUsers);
    $this->db->where('users_id', $this->input->post('id'));
    $this->db->update('users'); 
    
   return  $this->db->query("select users_email from users where users_id=".$this->input->post('id'))->row()->users_email;

	}
}
