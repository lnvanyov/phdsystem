<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {


	public function index()
	{
		$data = array();
		$data['url'] = base_url();

		$content = array();
		$content['breadcrumbs'] = array(
			'Home' => '/',
		);

		$this->load->view("users/student/header",$data);
		$this->load->view("users/student/index", $content);
		$this->load->view("users/student/footer",$data); 
	}

}
