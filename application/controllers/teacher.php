<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('assigments_model');
    }

	public function index()
	{
		$data['url'] = base_url();
		$this->load->view("users/teacher/header",$data);
		$this->load->view("users/teacher/index");
		$this->load->view("users/teacher/footer",$data); 
	}

	public function assigments()
	{
		$data = array();
		$data['url'] = base_url();

		$content = array();
		$this->load->helper('url');
		$content['breadcrumbs'] = array(
			'Home' => site_url('index.php/teacher'),
			'Assigments' => false
		);

		$assigments = $this->assigments_model->get_all_assigments();
		$content['assigments'] = $assigments;

		$this->load->view("users/teacher/header",$data);
		$this->load->view("users/teacher/assigments", $content);
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
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->addassigment();
        } else {
            $this->assigments_model->add_assigment();
            $this->session->set_flashdata('success', 'The assigment was created succesfully');
            redirect('index.php/teacher/addassigment', 'refresh');
        }
	}

	public function deleteassigment()
	{
		$id = $this->uri->segment(3);
		$this->assigments_model->delete_assigment($id);
        $this->session->set_flashdata('success', 'The assigment was deleted succesfully');
        redirect('index.php/teacher/assigments', 'refresh');
	}

	public function editassigment()
	{
		$id = $this->uri->segment(3);
		$data = array();
		$data['url'] = base_url();

		$content = array();
		$this->load->helper('url');
		$content['assigment'] = $this->assigments_model->get_assigment($id);

		$content['breadcrumbs'] = array(
			'Home' => site_url('index.php/teacher'),
			'Assigments' => site_url('index.php/teacher/assigments'),
			'Edit assigment' => false
		);

		$this->load->view("users/teacher/header",$data);
		$this->load->view("users/teacher/edit-assigment", $content);
		$this->load->view("users/teacher/footer",$data); 
	}

	public function updateassigment()
	{
		if ($this->assigments_model->update_assigment()) {
			$this->session->set_flashdata('success', 'The assigment was updated succesfully');
	        redirect('index.php/teacher/assigments', 'refresh');
		}
	}
}
