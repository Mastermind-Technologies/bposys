<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('User_m');
  }

  public function _init($title = null, $selected = null)
  {
    $data['title'] = $title;
    $data['selected'] = $selected;
    $this->load->view('templates/sb_landing_page/sb-landing-page-includes');
    $this->load->view('templates/sb_landing_page/sb-landing-page-navbar', $data);
  }

  public function _initDashboard()
  {
    $this->load->view('templates/sb_admin2/sb_admin2_includes');
    $this->load->view('templates/sb_admin2/sb_admin2_navbar');
  }

  public function login()
  {
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $data['selected'] = "home";
      $data['title'] = "Home";
      $this->session->set_flashdata('failed', 'Invalid username or password');
      redirect('home');
    }
    else
    {
      $fields = array(
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
        );
      $check = $this->User_m->process_login($fields);

      if($check)
      {
        $data['user'] = $this->User_m->get_user_details($fields);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();
        $session_data = array(
          'userId' => $this->encryption->encrypt($data['user'][0]->userId),
          'firstName' => $data['user'][0]->firstName,
          'lastName' => $data['user'][0]->lastName,
          'middleName' => $data['user'][0]->middleName,
          'email' => $this->encryption->encrypt($data['user'][0]->email)
          );
          // Add user data in session
        $this->session->set_userdata('userdata', $session_data);

        // echo "<pre>";
        // print_r($this->session->userdata['userdata']['userId']);
        // $user_id = $this->session->userdata['userdata']['userId'];
        // echo"<br>";
        // print_r($this->encryption->decrypt($user_id));
        // echo "</pre>";
        // exit();

        redirect("dashboard");
      }
      else
      {
        $this->session->set_flashdata('failed','Invalid username or password');
        redirect('home');
      }
    }

  }

  public function register()
  {
    $this->_init("Register", "register");
    $data['selected'] = "register";
    $data['title'] = "Register";
    //$this->load->view('template/navbar', $data);

    $this->load->view('register/index');
    $this->load->view('templates/sb_landing_page/sb-landing-page-footer');
  }

  public function register_user()
  {
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required'); //'required|valid_email|is_unique[users.email]'
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('civil-status', 'Civil Status', 'required');
    $this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required|matches[password]');

    if($this->form_validation->run() == FALSE)
    {
      $this->session->set_flashdata('error', validation_errors());
      redirect('register');
    }
    else
    {
      $month = $this->input->post('month');
      $day = $this->input->post('day');
      $year = $this->input->post('year');
      $raw_pw = $this->input->post('password');

      $options = [
      'cost' => 11,
      'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
      ];

      $fields = array(
        'firstName' => $this->input->post('fname'),
        'lastName' => $this->input->post('lname'),
        'middleName' => ($this->input->post('mname')!=null ? $this->input->post('mname') : '.'),
        'suffix' => ($this->input->post('suffix')!=null ? $this->input->post('suffix') : ''),
        'gender' => $this->input->post('gender'),
        'email' => $this->input->post('email'),
        'civilStatus' => $this->input->post('civil-status'),
        'role' => '3',
        'password' => password_hash($raw_pw, PASSWORD_BCRYPT, $options),
        'birthDate' => $month . "/" . $day . "/" . $year
        );

      $result = $this->User_m->register_user($fields);

      if($result)
      {
        $this->session->set_flashdata('success','Registration Successful!');
        redirect('home');
      }
      else
      {
        $this->session->set_flashdata('failed','Registration Failed!');
        redirect('register');
      }
    }
  }

  public function logout()
  {
    $sess_array = array(
      'userId' => '',
      'firstName' => '',
      'lastName' => '',
      'middleName' => '',
      'email' => ''
      );

    $this->session->unset_userdata('userdata', $sess_array);
    //$data['message_display'] = 'Successfully Logout';
    redirect('home');
  }
}
