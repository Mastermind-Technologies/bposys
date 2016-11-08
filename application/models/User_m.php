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
    $this->db->select('*')->from($this->_table_name)->where(['email' => $fields['email']])->limit(1);
    $result = $this->db->get();
    return $result->result();
  }

}

//   public function create_exhibitor($params)
//   {
//     $fields = array (
//     'name' => $params['name']
//   );
//
//   $this->db->select('*')->from($this->table)->where(array('name' => $fields['name']))->limit(1);
//   $query = $this->db->get();
//
//   if($query->num_rows() == 0)
//   {
//     $this->db->insert($this->table, $fields);
//     return true;
//   }
//   else
//   {
//     return false;
//   }
// }

/*public function get_hashed_password($name)
{
$this->db->select()->from($this->table)->where(array('name' => $name));
$user = $this->db->get();
return $user->first_row();
}*/

//UNDER DEVELOPMENT
// public function get_ticket($name)
// {
//   $this->db->select()->from($this->table)->where(array('owner' => $name));
//   $user = $this->db->get();
//   return $user->first_row();
// }
//
// public function get_all_exhibitors()
// {
//   $exhibitors = $this->db->get($this->table);
//   return $exhibitors->result();
// }
//
//
// public function update_ticket($fields)
// {
//   $this->db->where('ticketID', $fields['ticketnumber']);
//   $this->db->update($this->table, $fields);
// }

/*public function login($data, $password)
{
$this->db->select('*')->from($this->table)->where(array('name' => $data['username']))->limit(1);
$result = $this->db->get();

if($result->num_rows() == 1)
{
if(password_verify($data['password'], $password['password']->password))
{
return true;
}
else
{
return false;
}
}
else
{
return false;
}
}*/

// public function getUserData($name)
// {
//   $this->db->select()->from($this->table)->where(array('name' => $name));
//   $user = $this->db->get();
//   return $user->first_row();
// }
//
// public function deleteUser($id)
// {
//   $this->db->delete($this->table, array('id' => $id));
// }