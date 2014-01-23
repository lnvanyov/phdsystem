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

	public function addassigment()
	{
		$data = array();
		$data['url'] = base_url();

		$content = array();
		$content['breadcrumbs'] = array(
			'Home' => '/',
			'Assigments' => '/student/assigments',
			'Add assigment' => false
		);

		$this->load->view("users/student/header",$data);
		$this->load->view("users/student/add-assigment", $content);
		$this->load->view("users/student/footer",$data); 
	}

	public function createassigment()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Assigment title', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('lastname', 'Last name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->registration();
        } else {
            $this->users_model->add_user();
             redirect('index.php/users/thank', 'refresh');
        }
	}
}
