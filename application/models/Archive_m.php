<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval_m extends CI_Model {

  private $table_applications = 'archived_applications';
  private $table_lessors = 'archived_lessors';
  private $table_business_activities = 'archived_business_activities';

  public function __construct()
  {
    parent::__construct();
  }

  public function insert($fields = null)
  {
  	$this->db->insert($this->_table_name, $fields);
  }

  public function get_all_archived($query = null)
  {
    if($query != null)
      $this->db->where($query);
    $this->db->select('*')->from($this->table_applications);
    $result = $this->db->get()->result();

    foreach ($result as $key => $res) {
      $this->db->select('*')->from($this->table_lessors)->where(['referenceNum' => $res->referenceNum]);

      //attach lessor if application is rented
      $lessors = $this->db->get()->result();
      if(count($lessors) > 0)
      {
        $result->lessor = $lessor;
      }

      //attach business activities
      $this->db->select('*')->from($this->table_business_activities)->where(['referenceNum' => $res->referenceNum]);
      $business_activities = $this->db->get()->result();
      $res->business_activities = $business_activities;
    }

    return $result;
  }

  public function check_action_count($reference_num)
  {
    // $this->db->where(['type' => 'Approve', 'referenceNum' => $reference_num, 'YEAR(createdAt)' => date('Y')]);
    $this->db->where('(type = "Approve" or type = "Validate") and YEAR(createdAt) = "'.date('Y').'" and referenceNum = "'.$reference_num.'"');
    $this->db->select('*')->from($this->_table_name);
    return $this->db->get()->result();
  }

  public function get_latest_approval($query = null)
  {
    if($query != null)
      $this->db->where($query);
    $this->db->select('*')->from($this->_table_name)->order_by('createdAt', 'desc')->limit(1);
    $result = $this->db->get();

    return $result->result();
  }

}//END OF CLASS