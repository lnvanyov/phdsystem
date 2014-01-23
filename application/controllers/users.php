<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index() {
        if (($this->session->userdata('users_username') == "")) {
			$this->load->view('users/login');
        } else {
			$this->load->view('users/logincont');
        }
    }

    public function registration() {
        $data['url'] = base_url();
		$this->load->view("users/registration",$data);
        
    }

    public function logincont() {

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $result = $this->users_model->login($username, $password);
 
        if ($result){
			$user_role = $this->session->userdata['users_role'];
			//admin
			if($user_role == '1'){
				redirect('index.php/admin/index', 'refresh');
			//student
			}else if($user_role == '2'){
				redirect('index.php/student/index', 'refresh');
			//phd
			}else if($user_role == '3'){
				redirect('index.php/phd/index', 'refresh');
			//teacher
			}else{
				redirect('index.php/teacher/index', 'refresh');
			}
			
           
        }else{
            $this->login();
        }
    }
    
    public function thank() {
        $data['url'] = base_url();
        $this->load->view("users/thank", $data);
    }

    public function registrationcont() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('lastname', 'Last name', 'trim|required');
        $this->form_validation->set_rules('specialty', 'Specialty', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('email_address', 'Email', 'trim|required|valid_email|is_unique[users.users_email]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

        if ($this->form_validation->run() == FALSE) {
            $this->registration();
        } else {
            $this->users_model->add_user();
             redirect('index.php/users/thank', 'refresh');
        }
    }

    public function logout() {
    
        $ci = & get_instance();
         $newdata = array(
        'user_user_id'  => '',
        'user_school_id'    => '',
        'user_username'  => '',
        'user_logged_in'  => false,
    );
        $ci->session->unset_userdata($newdata);
        $ci->session->sess_destroy();
        redirect('/', 'refresh');
        $this->registration();
    }



}
