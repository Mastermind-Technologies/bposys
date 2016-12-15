<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'owners';
    $this->_table_users = 'users';
  }

  public function check_owner($user_id)
  {
    $this->db->select('*')->from($this->_table_name)->where(['userId' => $user_id])->limit(1);
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

  public function register_owner($fields = null)
  {
    $this->db->insert($this->_table_name, $fields);

    return true;
  }

  public function get_all_owner($query = null)
  {
    if($query != null)
    {
      $this->db->where($query);
    }
    $this->db->select('*')->from($this->_table_name)->join($this->_table_users,'owners.userId = users.userId');
    $result = $this->db->get();

    return $result->result();
  }

  public function get_full_details($fields = null)
  {
    $this->db->select('*')->from($this->_table_name)->join($this->_table_users,'owners.userId = users.userId')->where('owners.userId',$this->encryption->decrypt($fields['userId']));
    $result = $this->db->get();
    // echo "<pre>";
    // print_r($result->result());
    // echo "</pre>";
    // exit();
    return $result->result();
  }

  public function update_owner_details($user_fields = null, $applicant_fields = null)
  {
   $this->db->where('users.userId', $this->encryption->decrypt($this->session->userdata['userdata']['userId']));
   $this->db->update($this->_table_users, $user_fields);

   $this->db->where('owners.userId', $this->encryption->decrypt($this->session->userdata['userdata']['userId']));
   $this->db->update($this->_table_name, $applicant_fields);

   return true;
  }

}