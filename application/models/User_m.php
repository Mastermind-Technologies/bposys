<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'users';
    $this->_table_role = 'roles';
  }

  public function register_user($fields = null)
  {
    $this->db->select('*')->from($this->_table_name)->where(['email' => $fields['email']])->limit(1);
    $result = $this->db->get();

    if($result->num_rows() == 0)
    {
      $this->db->insert($this->_table_name, $fields);
      return true;
    }
    else
    {
      return false;
    }
  }

  public function process_login($fields = null)
  {
    $this->db->select('*')->from($this->_table_name)->where(['email' => $fields['email']])->limit(1);
    $result = $this->db->get();

    if($result->num_rows() == 0)
    {
      return false;
    }
    else
    {
      $password = $this->process_password($fields);
      if(password_verify($fields['password'], $password[0]->password))
      {
        return $result->result();
      }
      else
      {
        return false;
      }
    }
  }

  public function process_password($fields = null)
  {
    $this->db->select('password')->from($this->_table_name)->where(['email' => $fields['email']])->limit(1);
    $result = $this->db->get();
    return $result->result();
  }

  public function get_all_users($query = null)
  {
    $this->db->select('*')->from($this->_table_name)->where($query);
    $result = $this->db->get();
    return $result->result();
  }

  // public function get_user_details($user_id = null)
  // {
  //   $this->db->select('*')->from($this->_table_name)->where(['userId' => $user_id])->limit(1);
  //   $result = $this->db->get();
  //   return $result->result();
  // }

  public function check_user_role($role_id = null)
  {
    $this->db->select('name')->from($this->_table_role)->where(['roleId' => $role_id])->limit(1);
    $result = $this->db->get();
    return $result->result();
  }

}
