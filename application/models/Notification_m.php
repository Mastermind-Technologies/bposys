<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'notifications';
    $this->_application_table = 'applications';
    // $this->_lessor_table = 'lessors';
    // $this->_business_activity_table = 'business_activities';
  }

  public function insert($fields = null)
  {
  	$this->db->insert($this->_table_name, $fields);
  }

  // public function get_application_details($reference_number = null)
  // {
  // 	$this->db->select('*')->from($this->_table_name)->where(['referenceNum' => $reference_number])->or_where(['applicationId' => $reference_number])->limit(1);
  // 	$result = $this->db->get();

  // 	return $result->result();
  // }

  // public function get_all_applications_full($query = null)
  // {
  //   $this->db->select('*')->from($this->_table_name)->join($this->_lessor_table, 'applications.referenceNum = lessors.referenceNum')->join($this->_business_activity_table, 'applications.referenceNum = business_activities.referenceNum');
  //   $result = $this->db->get();

  //   return $result->result();
  // }

  public function get_all($query = null)
  {
    if($query != null)
      $this->db->where($query);
    $this->db->select('*')->from($this->_table_name);
    $result = $this->db->get();

    return $result->result();
  }

  public function get_applicant_notif($roleId = null, $userId = null)
  {
    $this->db->where(['notifications.role' => $roleId, 'applications.userId' => $userId]);
    $this->db->select('notifications.referenceNum, notifications.notifMessage')->from($this->_table_name)->join($this->_application_table, 'applications.referenceNum = notifications.referenceNum')->limit(10)->order_by("notifications.createdAt", "desc");
    $result = $this->db->get();

    return $result->result();
  }

  // public function update_application_reference_number($user_id = null)
  // {
  // 	$this->db->select('applicationId')->from($this->_table_name)->where(['userId' => $user_id, 'referenceNum' => 'Processing_'.$user_id])->limit(1);
  // 	$result = $this->db->get();

  // 	//applicationId
  // 	$applicationId = $result->result()[0]->applicationId;

  // 	//concatenate items
  // 	$raw_reference = $this->session->userdata['userdata']['firstName'].$this->session->userdata['userdata']['lastName'].$applicationId;

  // 	//encrypt raw reference
  // 	$encrypted_reference = $this->encryption->encrypt($raw_reference);

  // 	//get first 10 characters of encrpyted reference
  // 	$reference_number = strtoupper(substr($encrypted_reference, 0, 10));

  // 	//update reference number of application
  // 	$this->db->where(['applicationId' => $applicationId]);
  // 	$this->db->update($this->_table_name, ['referenceNum' => $reference_number]);

  // 	return $reference_number;
  // }

  public function update($query = null, $set = null)
  {
    $this->db->where($query);
    $this->db->update($this->_table_name, $set);
  }


}//END OF CLASS