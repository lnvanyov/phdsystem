<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('admin_model');
        

    }

	public function index()
	{
		$data['url'] = base_url();
		$data['arrUsers'] = $this->admin_model->get_all_users();
		$this->load->view("users/admin/header",$data);
		$this->load->view("users/admin/index",$data);
		$this->load->view("users/admin/footer",$data); 
	}
	
	public function deleteUser(){

        $this->admin_model->deleteUser();
        $this->index();
    }
    
    public function activateUser(){

        $mails  = $this->admin_model->activateUser();
		$this->sendActivationMail($mails);
		$this->index();
    }
    
    public function sendActivationMail($mail_to) {
			
		/*$this->load->library('email');
		$this->email->SetFrom('admin@'.$_SERVER['SERVER_ADDR'],'Admin');
		$this->email->addReplyTo('admin@'.$_SERVER['SERVER_ADDR']);
		$this->email->addAddress($mail_to);
		
		$this->email->Subject = 'PhD system activation mail';
		$this->email->msgHTML("Your account have been activated! You can login from here:".$_SERVER['SERVER_ADDR']);
		$this->email->AltBody = "Your account have been activated! You can login from here:".$_SERVER['SERVER_ADDR'];
		$this->email->send();*/
		 
    }
}
