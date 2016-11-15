<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'users';
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
        return true;
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

  public function get_user_details($fields = null)
  {
    $this->db->select('*')->from($this->_table_name)->where(['userId' => $this->encryption->decrypt($fields['userId'])])->limit(1);
    $result = $this->db->get();
    return $result->result();
  }

}
