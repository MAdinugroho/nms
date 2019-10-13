<?php
defined('BASEPATH') or exit('No direct script access allowed');

class General extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('general_model');
  }
  
  //=====Core Function====//
  public function _formValidation()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim', [
      'required' => 'Masukan Nama',
      'is_unique' => 'Username sudah ada'
    ]);
    
    $this->form_validation->set_rules('name', 'Name', 'required|trim', [
      'required' => 'Masukan Nama'
    ]);
    
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
      'valid_email' => 'Email tidak valid',
      'required' => 'Masukan Email'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|hasCapital|password_check', [
      'min_length' => 'password min 8 karakter',
      'password_check' => 'Harus terdapat angka',
      'hasCapital' => 'Harus terdapat 1 huruf besar',
      'required' => 'masukan password'
    ]);
  }

  public function index()
  {
    $data['record_user'] = $this->general_model->countUser();
    $data['record_optacacs'] = $this->general_model->countOptacacs();
    $data['webconf'] = $this->general_model->getWebconf('webconf', 'id', 1);
    $this->load->view('home', $data);
  }

  public function login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim', [
      'required' => 'Masukan Username',
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', [
      'required' => 'masukan password'
    ]);
    if ($this->form_validation->run() == false) {
      $data['webconf'] = $this->general_model->getWebconf('webconf', 'id', 1);
      $this->load->view('login', $data);
    } else {
      $this->loginValidation();
    }
  }

  private function loginValidation()
  {

    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->general_model->login($username);


    if ($user) {

      if (password_verify($password, $user['password'])) {
        $data = [
          'login' => true,
          'id'  => $user['id'],
          'username' => $user['username'],
          'password' => $user['password'],
          'name'  => $user['name'],
          'level' => $user['level']
        ];
        $this->session->set_userdata($data);
        $this->general_model->updateLastLog();
        $dataLog = 'Login';
        $this->general_model->insertLog($dataLog);
        if ($user['level'] == 'admin') {
          notify('Selamat Datang ', 'success', 'dashboardAdmin');
      } else {
          notify('Selamat Datang', 'success', 'dashboardUser');
      }
      } else {
        notify('Password salah ', 'error', 'login');
      }
    } else {
      notify('User tidak terdaftar', 'error', 'login');
    }
  }

  public function forgotPassword()
  {
    if ($this->input->post('resetPassword')) {
      $dataLog = 'Reset Password';
      $dataEmailLog = $this->input->post('email');
      $this->general_model->insertForgotLog($dataLog,$dataEmailLog);
      $this->general_model->resetPassword();
    } else{
    $data['webconf'] = $this->general_model->getWebconf();
    $this->load->view('forgotpassword', $data);
  }
  }


  public function profile()
  {
    
    $this->_formValidation();
    $id = $this->session->userdata['id'];
    if ($this->form_validation->run() == false) {
      $data['webconf'] = $this->general_model->getWebconf();
      $id = $this->session->userdata['id'];
      $data['detail'] = $this->general_model->getDetailUser($id);
      $data['view_name'] = "profile";
      $this->load->view('template', $data);
    } else {
      $dataLog = 'Update Profile';
      $this->general_model->insertLog($dataLog);
      $this->general_model->updateProfile($id);
        $data['account'] = $this->general_model->getUpdatedProfile();
        $data_session = array(
          'login' => true,
          'id' => $data['account']->id,
          'username' => $data['account']->name,
          'name' => $data['account']->name,
          'email' => $data['account']->email,
          'level' => $data['account']->level
        );
        $this->session->set_userdata($data_session);
        notify('Selamat Akun Berhasil Diubah', 'success', 'profile');
    }
  }

  public function editProfile()
  {

    $id = $this->session->userdata['id'];
    $data['dtluser'] = $this->account_model->getDetailUser($id);
    $data['view_name'] = "editprofile";
    $this->load->view('temp', $data);
  }

  public function logout()
  {
    $dataLog = 'Logout';
    $this->general_model->insertLog($dataLog);
    $this->session->sess_destroy();
    redirect(base_url('/'));
  }
}
