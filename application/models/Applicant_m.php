<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'applicants';
    $this->_table_users = 'users';
  }

  public function check_applicant($fields = null)
  {
    $this->db->select('*')->from($this->_table_name)->where(['userId' => $fields['userId']])->limit(1);
    $result = $this->db->get();

    if($result->num_rows() == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function register_applicant($fields = null)
  {
     $this->db->insert($this->_table_name, $fields);

     return true;
  }

  public function get_full_details($fields = null)
  {
    $this->db->select('*')->from($this->_table_name)->join($this->_table_users,'applicants.userId = users.userId')->where('applicants.userId',$fields['userId']);
    $result = $this->db->get();
    // echo "<pre>";
    // print_r($result->result());
    // echo "</pre>";
    // exit();
    return $result->result();
  }

  public function update_applicant($user_fields = null, $applicant_fields = null)
  {
  // $this->db->select('*')->from($this->_table_name)->join($this->_table_users,'applicants.userId = users.userId');
  // $result = $this->db->get();
  // echo "<pre>";
  // print_r($result->result());
  // echo "</pre>";
  // exit();

  //   $is_setup = $this->check_applicant($fields);
  //   if($is_setup)
  //   {

  //   }
  //   else
  //   {

  //   }

    $this->db->where('users.userId', $this->session->userdata['userdata']['userId']);
    $this->db->update($this->_table_users, $user_fields);
    // $this->db->update($this->_table_users, $user_fields);
    // $this->db->where('userId', $this->session->userdata['userdata']['userId']);

    $this->db->where('applicants.userId', $this->session->userdata['userdata']['userId']);
    $this->db->update($this->_table_name, $applicant_fields);
    // $this->db->update($this->_table_name, $applicant_fields);
    // $this->db->where('userId', $this->session->userdata['userdata']['userId']);
    // $this->db->set($user_fields);
    // $this->db->where('applicants.userId', $this->session->userdata['userdata']['userId']);
     // $this->db->where('users.userId',$this->session->userdata['userdata']['userId']);
    // $this->db->update('applicants JOIN users ON applicants.userId= users.userId');
    return true;
    // $this->db->where('userId', $fields['userId']);
    
  }


}