<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assessment_m extends CI_Model {

  var $table = 'assessments';
  var $table_charge = 'charges';
  public function __construct()
  {
    parent::__construct();
  }

  public function insert_assessment($fields)
  {
    $this->db->insert($this->table, $fields);
    return $this->db->insert_id();
  }

  public function add_charge($fields)
  {
    $this->db->insert($this->table_charge, $fields);
  }
}