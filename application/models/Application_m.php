<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application_m extends CI_Model {

  private $bplo = 'application_bplo';
  private $cenro = 'application_cenro';
  private $sanitary = 'application_sanitary';
  private $zoning = 'application_zoning';
  //private $bfp = 'application_bfp';
  private $lessor = 'lessors';
  private $business_activity = 'business_activities';
  public function __construct()
  {
    parent::__construct();
  }

  public function insert_bplo($fields = null)
  {
    $this->db->insert($this->bplo,$fields);
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }

  public function insert_cenro($fields = null)
  {
    $this->db->insert($this->cenro,$fields);
  }

  public function insert_sanitary($fields = null)
  {
    $this->db->insert($this->sanitary,$fields);
  }

  public function insert_zoning($fields = null)
  {
    $this->db->insert($this->zoning,$fields);
  }

  public function get_all_bplo_applications($query = null)
  {
    if($query != null)
      $this->db->where($query);

    $this->db->select('*')->from($this->bplo);
    $result = $this->db->get();

    return $result->result();
  }

  public function get_all_zoning_applications($query = null)
  {
    if($query != null)
      $this->db->where($query);

    $this->db->select('*')->from($this->zoning);
    $result = $this->db->get();

    return $result->result();
  }

  public function get_all_cenro_applications($query = null)
  {
    if($query != null)
      $this->db->where($query);

    $this->db->select('*')->from($this->cenro);
    $result = $this->db->get();

    return $result->result();
  }

  public function get_all_sanitary_applications($query = null)
  {
    if($query != null)
      $this->db->where($query);

    $this->db->select('*')->from($this->sanitary);
    $result = $this->db->get();

    return $result->result();
  }

  //OLD FUNCTIONS
  public function insert_application($fields = null)
  {
  	$this->db->insert($this->_table_name, $fields);
  }

  // public function get_application_details($reference_number = null)
  // {
  // 	$this->db->select('*')->from($this->_table_name)->where(['referenceNum' => $reference_number])->or_where(['applicationId' => $reference_number])->limit(1);
  // 	$result = $this->db->get();

  // 	return $result->result();
  // }

  public function get_all_applications_full($query = null)
  {
    $this->db->select('*')->from($this->bplo)->join($this->lessor, 'applications.referenceNum = lessors.referenceNum')->join($this->business_activity, 'applications.referenceNum = business_activities.referenceNum');
    $result = $this->db->get();

    return $result->result();
  }

  // public function get_all_bplo_applications($query = null)
  // {
  //   if($query != null)
  //     $this->db->where($query);
  // 	$this->db->select('*')->from($this->_table_name);
  //   $result = $this->db->get();

  //   return $result->result();
  // }

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

  public function update_application($query = null, $application = null)
  {
    $this->db->where(['referenceNum' => $query['referenceNum']]);
    switch($application)
    {
      case "bplo": $this->db->update($this->bplo, $query); break;
      case "cenro": $this->db->update($this->cenro, $query); break;
      case "zoning": $this->db->update($this->zoning, $query); break;
      case "sanitary": $this->db->update($this->sanitary, $query); break;
      //bfp
    }  
  }

  public function check_status($reference_number, $application)
  {
    $this->db->where(['referenceNum' => $reference_number]);
    switch($application)
    {
      case "bplo": $this->db->select('status')->from($this->bplo); break;
      case "cenro": $this->db->select('status')->from($this->cenro); break;
      case "zoning": $this->db->select('status')->from($this->zoning); break;
      case "sanitary": $this->db->select('status')->from($this->sanitary); break;
      //bfp
    }
    $result = $this->db->get();
    return $result->result()[0]->status;
  }


}//END OF CLASS