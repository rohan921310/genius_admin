<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);

		if ($this->session->userdata('username')) {
		} else {
			redirect(base_url());
		}
	}
	public function index()
	{
		$data['teacher_registration'] = $this->Admin_model->teacher_registration();
		$data['teacher_approved'] = $this->Admin_model->teacher_approved();
		$data['teacher_rejected'] = $this->Admin_model->teacher_rejected();
		$data['teacher_pending'] = $this->Admin_model->teacher_pending();

	
		$this->load->view('include/header');
		$this->load->view('admin', $data);
		$this->load->view('include/footer');
	}

	public function approve_teacher()
	{
		$this->Admin_model->approve_teacher();
		$this->session->set_flashdata('msg', 'Teacher Approved');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url() . 'index.php/teacher_master');
	}

	public function reject_teacher()
	{
		$this->Admin_model->reject_teacher();
		$this->session->set_flashdata('msg', 'Teacher Rejected');
		$this->session->set_flashdata('msg_class', 'bg-danger text-white');
		redirect(base_url() . 'index.php/teacher_master');
	}


	public function class_master()
	{
		$data['category'] = $this->Admin_model->view_class();
		$data['count_class'] = $this->Admin_model->count_class();

		$this->load->view('include/header');
		$this->load->view('class_master', $data);
		$this->load->view('include/footer');
	}

	public function add_class()
	{
		$this->load->view('include/header');
		$this->load->view('add_class');
		$this->load->view('include/footer');
	}

	public function check_class()
	{
		$this->Admin_model->add_class();
		$this->session->set_flashdata('msg', 'Successfully Added');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url() . 'index.php/class_master');
	}

	public function delete_class()
	{
		$this->Admin_model->delete_class();
		redirect(base_url() . 'index.php/class_master');
	}

	public function get_class()
	{
		$data['class'] = $this->Admin_model->get_class();

		$this->load->view('include/header');
		$this->load->view('edit_class', $data);
		$this->load->view('include/footer');
	}
	public function edit_class()
	{
		$this->Admin_model->edit_class();
		$this->session->set_flashdata('msg', 'Successfully Updated');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url() . 'index.php/class_master');
	}

	public function subject_master()
	{
		$data['category'] = $this->Admin_model->view_subject();
		$data['count_subject'] = $this->Admin_model->count_subject();

		$this->load->view('include/header');
		$this->load->view('subject_master', $data);
		$this->load->view('include/footer');
	}

	public function add_subject()
	{
		$this->load->view('include/header');
		$this->load->view('add_subject');
		$this->load->view('include/footer');
	}

	public function check_subject()
	{
		$this->Admin_model->add_subject();
		$this->session->set_flashdata('msg', 'Successfully Added');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url() . 'index.php/subject_master');
	}

	public function delete_subject()
	{
		$this->Admin_model->delete_subject();
		redirect(base_url() . 'index.php/subject_master');
	}

	public function get_subject()
	{
		$data['subject'] = $this->Admin_model->get_subject();

		$this->load->view('include/header');
		$this->load->view('edit_subject', $data);
		$this->load->view('include/footer');
	}
	public function edit_subject()
	{
		$this->Admin_model->edit_subject();
		$this->session->set_flashdata('msg', 'Successfully Updated');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url() . 'index.php/subject_master');
	}
}
