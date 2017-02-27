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
		// var_dump($this->encryption->decrypt($this->session->userdata['userdata']['role']));
		// $role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$this->load->view('templates/matrix/matrix_includes');
		$this->load->view('templates/matrix/matrix_navbar', $data);
	}

	public function index()
	{
		// $user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		// $role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		// $this->_init_matrix();

		if(!isset($this->session->userdata['userdata']))
		{
			// $this->session->set_flashdata('failed', 'You are not logged in!');
			$this->load->view('admin/login');
		}
		else {
			$this->dashboard();
		}
	}

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			// $this->session->set_flashdata('failed', 'You are not logged in!');
			redirect('home');
		}
	}

	public function dashboard()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$data['title'] = "Admin Dashboard";
		$data['active'] = "Dashboard";
		$this->_init_matrix($data);
		$this->load->view('admin/index');
	}

	public function Users()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$data['title'] = "Users";
		$data['active'] = "Users";
		$this->_init_matrix($data);
		$this->load->view('admin/users');
	}

	public function add_user()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$data['title'] = "Users";
		$data['active'] = "Users";
		$this->_init_matrix($data);
		$this->load->view('admin/add_user');
	}

	public function edit_user()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$data['title'] = "Users";
		$data['active'] = "Users";
		$this->_init_matrix($data);
		$this->load->view('admin/edit_user');
	}

	public function delete_user()
	{

	}



}//END OF CLASS,
