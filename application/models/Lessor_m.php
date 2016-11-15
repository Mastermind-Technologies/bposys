<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessor_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'lessors';
  }

  public function insert_lessor($fields = null)
  {
  	$this->db->insert($this->_table_name, $fields);
  }

  public function get_all_lessor()
  {

  }

  public function get_lessor_details($lessor_id)
  {
  	$this->db->select('*')->from($this->_table_name)->where(['lessorId' => $lessor_id])->limit(1);
  	$result = $this->db->get();

  	return $result->result();
  }

  public function update_lessor()
  {

  }
}