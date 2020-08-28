<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


    public function teacher_registration()
    {
        $this->db->select('*');
        $this->db->from('teacher_registration');
        $this->db->order_by('teacher_id', 'DESC');
        $query = $this->db->get();
      
        return $query->result();
    }

    public function teacher_approved()
    {
        $this->db->select('teacher_registration.*,teacher_registration.approval');
        $this->db->from('teacher_registration');
        $this->db->where('approval', 1);
        $query = $this->db->get();
       
        // print_r($query);die;
        return  $query->num_rows();
    }

    public function teacher_rejected()
    {
        $this->db->select('teacher_registration.*,teacher_registration.approval');
        $this->db->from('teacher_registration');
        $this->db->where('approval', 2);
        $query = $this->db->get();
       
        // print_r($query);die;
        return  $query->num_rows();
    }

    public function teacher_pending()
    {
        $this->db->select('teacher_registration.*,teacher_registration.approval');
        $this->db->from('teacher_registration');
        $this->db->where('approval', 0);
        $query = $this->db->get();
    
        // print_r($query);die;
        return  $query->num_rows();
    }

    public function approve_teacher(){
        $teacher_id = $this->input->get('teacher_id');
        $password = mt_rand(100000, 999999);
        $username = "T".$teacher_id; 
      
        $this->db->where('teacher_id', $teacher_id);
        $formArray = array(
            'password' => $password,
            'username' => $username,
           'approval' => 1

        );
        $this->db->update('teacher_registration', $formArray);

///.............sms sender api...................//////////
    //     $this->db->select('*');
    //     $this->db->from('teacher_registration');
    //     $this->db->where('teacher_id', $teacher_id);
    //     $query = $this->db->get();
    //        $q= $query->row_array();
    //     // print_r($q['teacher_mobile']);
    //     // die;

	// // Authorisation details.
	// $username = "sharmarajesh1077@gmail.com";
	// $hash = "bccacfdf2f5aa159cd501459b4bd4d4b0e5c2dd06de99ee6535f94bb9aa65db8";

	// // Config variables. Consult http://api.txtlocal.com/docs for more info.
	// $test = "0";

	
	// $sender = "API Test"; // This is who the message appears to be from.
	// $numbers = "7065414292"; // A single number or a comma-seperated list of numbers
	// $message = "Congrats You are now Part of Our Institute";
	// // 612 chars or less
	// // A single number or a comma-seperated list of numbers
	
	// $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	// $ch = curl_init('http://api.txtlocal.com/send/?');
	// curl_setopt($ch, CURLOPT_POST, true);
	// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// $result = curl_exec($ch); // This is the result from the API
	// curl_close($ch);

    }

    public function reject_teacher(){
        $teacher_id = $this->input->get('teacher_id');

        $this->db->where('teacher_id', $teacher_id);
        $formArray = array(

           'approval' => 2

        );
        $this->db->update('teacher_registration', $formArray);
    }

    public function view_class()
    {
        $this->db->select('*');
        $this->db->from('class');
        $query = $this->db->get();
        
        return $query->result();
    }
    public function count_class()
    {
        $this->db->select('class.*,class.class_id');
        $this->db->from('class');
        $query = $this->db->get();
        return  $query->num_rows();
    }
    public function add_class()
    {
      

        extract($this->input->post());
        $formArray = array(
            'class_name' => $class_name,
            'date' => $date
          
        );

        $this->db->insert('class', $formArray);
    }
    function delete_class()
    {
        $class_id = $this->input->get('class_id');
  
        $this->db->where('class_id', $class_id);
        $this->db->delete('class');
    }

    public function get_class()
    {
        $class_id = $this->input->get('class_id');

        $this->db->from('class');
        $this->db->where('class_id', $class_id);


        $query = $this->db->get()->row_array();

        return $query;
    }

    function edit_class()
    {
        $class_id = $this->input->get('class_id');
        extract($this->input->post());
        $this->db->where('class_id', $class_id);
        $formArray = array(
            'class_name' => $class_name,
            'date' => $date,

        );
        return $result = $this->db->update('class', $formArray);
    }

    public function view_subject()
    {
        $this->db->select('*');
        $this->db->from('subject');
        $query = $this->db->get();
        return $query->result();
    }
    public function count_subject()
    {
        $this->db->select('subject.*,subject.subject_id');
        $this->db->from('subject');
        $query = $this->db->get();
        return  $query->num_rows();
    }
    public function add_subject()
    {
      

        extract($this->input->post());
        $formArray = array(
            'subject_name' => $subject_name,
            'date' => $date
          
        );

        $this->db->insert('subject', $formArray);
    }
    function delete_subject()
    {
        $subject_id = $this->input->get('subject_id');
  
        $this->db->where('subject_id', $subject_id);
        $this->db->delete('subject');
    }

    public function get_subject()
    {
        $class_id = $this->input->get('subject_id');

        $this->db->from('subject');
        $this->db->where('subject_id', $subject_id);


        $query = $this->db->get()->row_array();

        return $query;
    }

    function edit_subject()
    {
        $subject_id = $this->input->get('subject_id');
        extract($this->input->post());
        $this->db->where('subject_id', $subject_id);
        $formArray = array(
            'subject_name' => $subject_name,
            'date' => $date,

        );
        return $result = $this->db->update('subject', $formArray);
    }
}
