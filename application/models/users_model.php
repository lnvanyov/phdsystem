<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model {
  public function __construct()
  {
	
  }

  function login($username,$password)
  {
    $this->db->where("users_username",$username);
    $this->db->where("users_password",$password);
    $query=$this->db->get("users");
   
    if($query->num_rows()>0){
    foreach($query->result() as $rows){
      //add all data to session
      $newdata = array(
        'users_id'  => $rows->users_id,
        'users_role'    => $rows->users_role,
        'users_username'  => $rows->users_username,
        'users_logged_in'  => TRUE,
      );
      }
      $this->session->set_userdata($newdata);
      return true;
    }
    return false;
  }

  public function add_user(){
    $arrDataUser=array(
		'users_firstname'=>$this->input->post('firstname'),
		'users_lastname'=>$this->input->post('lastname'),
		'users_specialty'=>$this->input->post('specialty'),
		'users_role'=>$this->input->post('role'),
		'users_email'=>$this->input->post('email_address'),
		'users_username'=>$this->input->post('username'),
		'users_password'=>md5($this->input->post('password')),
    );
    $this->db->insert('users',$arrDataUser);
  }

  public function profile($intUserId){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('schools','schools.school_id=users.user_school_id');
    $this->db->join('countries','schools.school_country_id=countries.id');
    $this->db->where('user_id', $intUserId);
    $query = $this->db->get();
    
    return $query->result_array();
  }

}
