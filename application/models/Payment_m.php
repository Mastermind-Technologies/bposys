<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_m extends CI_Model {

  private $table = 'payments';

  public function __construct()
  {
    parent::__construct();
  }

  public function insert_payment($fields)
  {
  	$this->db->insert($this->table, $fields);
    return $this->db->insert_id();
  }

  public function get_all_payments($query = null)
  {
    if($query != null)
      $this->db->where($query);
    $this->db->select('*')->from($this->table);
    return $this->db->get()->result(); 
  }

  // public function insert_business_activity($fields)
  // {
  //   $this->db->insert($this->table_business_activities, $fields);
  // }

  // public function insert_lessor($fields)
  // {
  //   $this->db->insert($this->table_lessors, $fields);
  // }

  // public function get_all_archived($query = null)
  // {
  //   if($query != null)
  //     $this->db->where($query);
  //   $this->db->select('*')->from($this->table_applications);
  //   $result = $this->db->get()->result();

  //   foreach ($result as $key => $res) {
  //     $this->db->select('*')->from($this->table_lessors)->where(['referenceNum' => $res->referenceNum]);

  //     //attach lessor if application is rented
  //     $lessors = $this->db->get()->result();
  //     if(count($lessors) > 0)
  //     {
  //       $result->lessor = $lessor;
  //     }

  //     //attach business activities
  //     $this->db->select('*')->from($this->table_business_activities)->where(['referenceNum' => $res->referenceNum]);
  //     $business_activities = $this->db->get()->result();
  //     $res->business_activities = $business_activities;
  //   }

  //   return $result;
  // }

}//END OF CLASS