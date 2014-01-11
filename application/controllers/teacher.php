<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller {


	public function index()
	{
		$data['url'] = base_url();
		$this->load->view("users/teacher/header",$data);
		$this->load->view("users/teacher/index");
		$this->load->view("users/teacher/footer",$data); 
	}
}
