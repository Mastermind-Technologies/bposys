<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->_table_name = 'applications';
  }