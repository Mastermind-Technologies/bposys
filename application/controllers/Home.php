<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load css and js
		//$this->load->view('template/main');
    	// parent::__construct();
		//
    	// // Load form helper library
    	// $this->load->helper('form');
		//
    	// // Load form validation library
    	// $this->load->library('form_validation');
		//
    	// // Load session library
    	// //this is now autoloaded
    	// //$this->load->library('session');
		//
    	// // Load database
   	 	// $this->load->model('ticket');
   		 // $this->load->model('exhibitor_m');
   		 // $this->load->model('log_m');
	}

	public function _init($title = null, $selected = null)
	{
		$data['title'] = $title;
		$data['selected'] = $selected;
		$this->load->view('templates/sb_landing_page/sb-landing-page-includes');
		$this->load->view('templates/sb_landing_page/sb-landing-page-navbar', $data);
	}

	public function index()
	{
		$this->_init("Home", "home");
		$this->load->view('home/index');
		$this->load->view('templates/sb_landing_page/sb-landing-page-footer');
	}
}
