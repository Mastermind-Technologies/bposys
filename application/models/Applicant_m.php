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
    $this->db->update($this->_table_users, $user_fields);
    $this->db->where('userId', $this->session->userdata['userdata']['userId']);

    $this->db->update($this->_table_name, $applicant_fields);
    $this->db->where('userId', $this->session->userdata['userdata']['userId']);
    return true;
    // $this->db->where('userId', $fields['userId']);
    
  }


}