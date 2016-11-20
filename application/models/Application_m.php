<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'applications';
  }

  public function insert_application($fields = null)
  {
  	$this->db->insert($this->_table_name, $fields);
  }

  public function get_application_details($reference_number = null)
  {
  	$this->db->select('*')->from($this->_table_name)->where(['referenceNum' => $reference_number])->or_where(['applicationId' => $reference_number])->limit(1);
  	$result = $this->db->get();

  	return $result->result();
  }

  public function get_all_applications($user_id = null)
  {
  	$this->db->select('*')->from($this->_table_name)->where(['userId' => $user_id]);
    $result = $this->db->get();

    return $result->result();
  }

  public function get_waiting_applications()
  {
    $this->db->select('*')->from($this->_table_name)->where(['status' => 'Waiting']);
    $result = $this->db->get();

    return $result->result();
  }

  public function update_application_reference_number($user_id = null)
  {
  	$this->db->select('applicationId')->from($this->_table_name)->where(['userId' => $user_id, 'referenceNum' => 'Processing_'.$user_id])->limit(1);
  	$result = $this->db->get();

  	//applicationId
  	$applicationId = $result->result()[0]->applicationId;

  	//concatenate items
  	$raw_reference = $this->session->userdata['userdata']['firstName'].$this->session->userdata['userdata']['lastName'].$applicationId;

  	//encrypt raw reference
  	$encrypted_reference = $this->encryption->encrypt($raw_reference);

  	//get first 10 characters of encrpyted reference
  	$reference_number = strtoupper(substr($encrypted_reference, 0, 10));

  	//update reference number of application
  	$this->db->where(['applicationId' => $applicationId]);
  	$this->db->update($this->_table_name, ['referenceNum' => $reference_number]);

  	return $reference_number;
  }

  public function update_application()
  {

  }


}//END OF CLASS