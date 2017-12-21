<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation', 'email'));
		//$this->load->model('user_model');
    }
	public function index()
	{
		$this->load->view('base');
		$this->sign_up();
	}

	public function sign_up(){
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('username', 'username', 'trim|required|valid_email|is_unique[user.username]');

		if($this->form_validation->run() == FALSE){

		}else{
			//add form data in an array
			$data = array(
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
			);
			
			if($insert = $this->user_model->create_user($data)){
				var_dump($insert);
			}else{
				
			}
			
		}$this->load->view('base');
	}
}
