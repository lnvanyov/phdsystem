<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Phd extends CI_Controller {


	public function index()
	{
		$data['url'] = base_url();
		$this->load->view("users/phd/header",$data);
		$this->load->view("users/phd/index");
		$this->load->view("users/phd/footer",$data); 
	}
}
