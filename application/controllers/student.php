<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {


	public function index()
	{
		$data['url'] = base_url();
		$this->load->view("users/student/header",$data);
		$this->load->view("users/student/index");
		$this->load->view("users/student/footer",$data); 
	}
}
