<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Owner_m');
		$this->load->model('Applicant_m');
		$this->load->library('form_validation');
	}

	public function _init()
	{
		$this->load->view('templates/sb_admin2/sb_admin2_includes');
		$this->load->view('templates/sb_admin2/sb_admin2_navbar');
	}

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			redirect('home');
		}
	}

	public function index()
	{
		$this->isLogin();
		$this->_init();
		$user_id = $this->session->userdata['userdata']['userId'];

		$is_registered = $this->Owner_m->check_owner($user_id);

		if($is_registered)
		{
			$data['user'] = $this->Owner_m->get_full_details($this->session->userdata['userdata']);
			$this->load->view('dashboard/applicant/index', $data);	
		}
		else
		{
			$data['user'] = $this->User_m->get_user_details($this->session->userdata['userdata']);
			$this->load->view('dashboard/applicant/edit_info', $data);
		}

	}
}
