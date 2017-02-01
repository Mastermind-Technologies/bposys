<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_Activity_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'business_activities';
  }

  public function insert_business_activity($fields = null)
  {
  	$this->db->insert($this->_table_name, $fields);
  }

  public function get_all_business_activity($query = null)
  {
    if($query != null)
      $this->db->where($query);
    $this->db->select('*')->from($this->_table_name);
    $result = $this->db->get();

    return $result->result();
  }

//just in case
  //select business_activities.lineOfBusiness, business_activities.capitalization from business_activities join application_bplo on application_bplo.applicationId = business_activities.bploId where bploId = 1 

  // public function get_business_activity_details($activity_id)
  // {
  // 	  	$this->db->select('*')->from($this->_table_name)->where(['activityId' => $activity_id])->limit(1);
  // 	$result = $this->db->get();

  // 	return $result->result();
  // }

  public function update_business_activity()
  {

  }
}