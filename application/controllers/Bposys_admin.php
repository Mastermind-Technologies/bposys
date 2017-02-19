<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bposys_admin extends CI_Controller {

	public function __construct()
	{
		//object classes are autoloaded from config/autoload.php
		parent::__construct();
	}

	public function _init($data = null)
	{
		$this->load->view('templates/matrix/matrix_includes');
		$this->load->view('templates/matrix/matrix_navbar');
	}

	public function _init_matrix($data = null)
	{
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);

		if($role == 'Master Admin')
		{
			$query['status'] = 'For applicant visit';
			$data['incoming'] = 0;

			$query['status'] = 'On process';
			$data['process'] = 0;

			$query['status'] = 'Active';
			$data['issued'] = 0;

			$data['total'] = $data['incoming']+$data['process']+$data['issued'];
		}

		$this->load->view('templates/matrix/matrix_includes');
		$this->load->view('templates/matrix/matrix_navbar', $data);
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function login()
	{

	}

	public function dashboard()
	{

	}

	public function user()
	{

	}

	public function add_user()
	{

	}

	public function edit_user()
	{

	}

	public function delete_user()
	{

	}



}//END OF CLASS,
