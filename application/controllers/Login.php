<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin_login');
    
    }

    public function login_check(){
        $resutl=$this->Login_model->admin();
		if($resutl) {
		
			redirect(base_url().'index.php/class_master');


	   } else {
        $this->session->set_flashdata('msg', 'Invalid Details');
        $this->session->set_flashdata('msg_class', 'bg-danger text-white');

		   redirect(base_url());
	   }
	}
	public function logout(){


		$this->session->unset_userdata('admin_name');
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('msg', 'Successfully Logged Out');
        $this->session->set_flashdata('msg_class', 'bg-success text-white');
		
		redirect(base_url());
	}
}