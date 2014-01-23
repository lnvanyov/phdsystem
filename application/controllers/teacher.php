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

	public function addassigment()
	{
		$data = array();
		$data['url'] = base_url();

		$content = array();
		$this->load->helper('url');
		$content['breadcrumbs'] = array(
			'Home' => site_url('index.php/teacher'),
			'Assigments' => site_url('index.php/teacher/assigments'),
			'Add assigment' => false
		);

		$this->load->view("users/teacher/header",$data);
		$this->load->view("users/teacher/add-assigment", $content);
		$this->load->view("users/teacher/footer",$data); 
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
