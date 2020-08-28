<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function admin()
	{
        $email=$this->input->post('email');
		$password=$this->input->post('password');
		
		$this->db->select('*');
		$this->db->from('admin_login');
		$this->db->where('username',$email);
		$this->db->where('password',$password);
		$query=$this->db->get();
		$login=$query->row();
	
		if($login){
			$this->session->set_userdata('admin_name',$login->admin_name);
			$this->session->set_userdata('username',$login->username);
		
		
			return 1;
		} else {
			return 0;
		}
	}
}
