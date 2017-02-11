<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_Activity_m extends CI_Model {

  var $table = 'business_activities';
  var $bplo = 'application_bplo';
  public function __construct()
  {
    parent::__construct();
    
  }

  public function insert_business_activity($fields = null)
  {
  	$this->db->insert($this->table, $fields);
  }

  public function get_all_business_activity($query = null)
  {
    if($query != null)
      $this->db->where($query);
    $this->db->select('*')->from($this->table);
    $result = $this->db->get();

    return $result->result();
  }

  public function get_all_business_activity_by_reference_num($reference_num)
  {
    //select business_activities.lineOfBusiness, business_activities.capitalization from business_activities join application_bplo on application_bplo.applicationId = business_activities.bploId where application_bplo.referenceNum = "4824FE5C5F" 
    $this->db->select('business_activities.lineOfBusiness, business_activities.capitalization, business_activities.bploId');
    $this->db->from($this->table);
    $this->db->join($this->bplo, 'business_activities.bploId = application_bplo.applicationId');
    $this->db->where(['application_bplo.referenceNum' => $reference_num]);

    return $this->db->get()->result();
  }

//just in case
  //select business_activities.lineOfBusiness, business_activities.capitalization from business_activities join application_bplo on application_bplo.applicationId = business_activities.bploId where bploId = 1 

  // public function get_business_activity_details($activity_id)
  // {
  // 	  	$this->db->select('*')->from($this->table)->where(['activityId' => $activity_id])->limit(1);
  // 	$result = $this->db->get();

  // 	return $result->result();
  // }

  public function update_business_activity()
  {

  }
}