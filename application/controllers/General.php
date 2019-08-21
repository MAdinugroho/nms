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


  public function index()
  {
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
      $this->load->view('login');
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
                    'name'  => $user['name'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($data);
                notify('Selamat Datang ', 'success', 'dashboard');
            } else {
                notify('Password salah ', 'error', 'login');
            }
        } else {
            notify('User tidak terdaftar', 'error', 'login');
        }
    }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('/'));
  }
}
