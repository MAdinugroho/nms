<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('admin_model');

    if (!$this->session->userdata['login']) {
      notify('Silakan Login Terlebih Dahulu', 'Warning', 'login');
    }
  }

  public function dashboard()
  {
    // $data['account_tacac'] = $this->admin_model->getAccountTacac();
    $data['webconf'] = $this->admin_model->getWebconf();
    $data['view_name'] = 'user/dashboard';
    $this->load->view('template', $data);
  }

}