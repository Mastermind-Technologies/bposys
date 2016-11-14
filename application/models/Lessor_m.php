<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessor_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'lessors';
  }