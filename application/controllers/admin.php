<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$data['url'] = base_url();
		$this->load->view("users/admin/header",$data);
		$this->load->view("users/admin/index");
		$this->load->view("users/admin/footer",$data); 
	}
}
