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

  public function get_assessment($query = null)
  {
    if($query != null)
      $this->db->where($query);
    $this->db->select('*')->from($this->table)->order_by('createdAt', 'desc')->limit(1);
    $result = $this->db->get();

    return $result->result();
  }

  public function update_assessment($query, $amount_paid, $paid_up_to)
  {
    //get latest assessment to be updated
    $this->db->select('amount, assessmentId')->from($this->table)->where($query)->order_by('createdAt', 'desc')->limit(1);
    $result = $this->db->get()->result()[0];
    $amount = $result->amount;
    $assessmentId = $result->assessmentId;

    // var_dump($assessmentId);
    // exit();
    

    //deduct amountPaid on assessmentAmount and set paidUpTo
    if($amount_paid > $amount)
    {
      $set['amount'] = 0;
    }
    else
    {
      $set['amount'] = $amount - $amount_paid;
    }

    $set['paidUpTo'] = $paid_up_to;
    
    $this->db->where(['assessmentId' => $assessmentId]);
    $this->db->update($this->table, $set);
  }

  public function add_charge($fields)
  {
    $this->db->insert($this->table_charge, $fields);
  }

  public function get_charges($query = null)
  {

    $add_year = ['YEAR(createdAt)' => date('Y')];
    if($query != null)
    {
      $query = array_merge($query, $add_year);
      $this->db->where($query);
    }

    $this->db->select('*')->from($this->table_charge);
    $result = $this->db->get();

    return $result->result();
  }
}

