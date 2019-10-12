<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct(); //method construktor yang pasti dijalankan ketika class dijalankan
    $this->load->library('form_validation');//memanggil library form validasi untuk validasi input
    $this->load->model('admin_model');//memanggil model untuk fungsi yang berhubungan dengan DB

    if (!$this->session->userdata['login']) {
      notify('Silakan Login Terlebih Dahulu', 'Warning', 'login');//pengecekan session, jika ga ada session di arahkan ke halaman login
    }
  }

  //=====Core Function====//
  public function _formValidation()//Fungsi Form Validasi untuk ngecek username,name,email,password yang diinput
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[account.username]', [
      'required' => 'Masukan Nama',
      'is_unique' => 'Username sudah ada'
    ]);

    $this->form_validation->set_rules('name', 'Name', 'required|trim', [
      'required' => 'Masukan Nama'
    ]);

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[account.email]', [
      'valid_email' => 'Email tidak valid',
      'required' => 'Masukan Email',
      'is_unique' => 'Email sudah ada'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|hasCapital|password_check', [
      'min_length' => 'password min 8 karakter',
      'password_check' => 'Harus terdapat angka',
      'hasCapital' => 'Harus terdapat 1 huruf besar',
      'required' => 'masukan password'
    ]);
	}
	
	public function _formValidationtacac()//Fungsi Form Validasi untuk ngecek username,name,email,password yang diinput
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[account_tacac.username]', [
      'required' => 'Masukan Nama',
      'is_unique' => 'Username sudah ada'
    ]);

    $this->form_validation->set_rules('name', 'Name', 'required|trim', [
      'required' => 'Masukan Nama'
    ]);

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[account_tacac.email]', [
      'valid_email' => 'Email tidak valid',
      'required' => 'Masukan Email',
      'is_unique' => 'Email sudah ada'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|hasCapital|password_check', [
      'min_length' => 'password min 8 karakter',
      'password_check' => 'Harus terdapat angka',
      'hasCapital' => 'Harus terdapat 1 huruf besar',
      'required' => 'masukan password'
    ]);
  }


  public function dashboard()//fungsi controler untuk menampilkan halaman pertama untuk role admin
  {
    $data['account_tacac'] = $this->admin_model->getAccountTacac();
    $data['account'] = $this->admin_model->getAccount();
    $data['record_admin'] = $this->admin_model->countAdmin();
    $data['record_user'] = $this->admin_model->countUser();
    $data['record_admintacacs'] = $this->admin_model->countAdmintacacs();
    $data['record_optacacs'] = $this->admin_model->countOptacacs();
    $data['webconf'] = $this->admin_model->getWebconf();
    $data['view_name'] = 'admin/dashboard';
    $this->load->view('template', $data);
  }

  public function monitor()//fungsi controler untuk menampilkan halaman monitor
  {
    $data['webconf'] = $this->admin_model->getWebconf();
    $data['datalog'] = $this->admin_model->dataLog();
    $data['view_name'] = 'admin/monitor';
    $this->load->view('template', $data);
  }

  
  //=====Account Function=====//
  public function account()//fungsi controler untuk menampilkan halaman akun,dan melihat tab akun yang sudah ada
  {
    if ($this->input->post('checkGroup')) {
      redirect(base_url('createAccount/' . $this->input->post('group')));
    } else {
      $data['account'] = $this->admin_model->getAccount();
      $data['view_name'] = 'admin/account';
      $data['webconf'] = $this->admin_model->getWebconf();
      $this->load->view('template', $data);
    }
  }

  public function createAccount($id)//fungsi controler untuk menambah akun yang di kirimkan datanya ke account_model
  {
    $this->_formValidation();
    if ($this->form_validation->run() == false) {
      $data['webconf'] = $this->admin_model->getWebconf();
      $data['group'] = $id;
      $data['view_name'] = 'admin/create_account';
      $this->load->view('template', $data);
    } else {
      $dataLog = 'Create '.$id.'';
      $this->admin_model->insertLog($dataLog);
      $this->admin_model->createAccount();
      notify('Pembuatan Akun Berhasil Dilakukan', 'success', 'account');
    }
  }

  public function detailAccount($id)//fungsi controler untuk menampilkan halaman detail akun berdasarkan id yang dipilih
  {
    if($this->input->post('deleteAccount')){$this->admin_model->deleteAccount();}
    $data['account'] = $this->admin_model->getDetailAccount($id);
    $data['webconf'] = $this->admin_model->getWebconf();
    $data['view_name'] = "admin/detail_account";
    $this->load->view('template', $data);
  }


  //=====Account Tacac Function=====//
  public function accountTacac()//fungsi controler untuk menampilkan halaman akun tacac,dan melihat tab akun yang sudah ada
  {
    if ($this->input->post('checkGroupTacac')) {
      redirect(base_url('createAccountTacac/' . $this->input->post('group')));
    } else {
      $data['account_tacac'] = $this->admin_model->getAccountTacac();
      $data['view_name'] = 'admin/account_tacac';
      $data['webconf'] = $this->admin_model->getWebconf();
      $this->load->view('template', $data);
    }
  }

  public function createAccountTacac($id)//fungsi controler untuk menambah akun yang di kirimkan datanya ke account_tacac_model
  {
    $this->_formValidationtacac();
    if ($this->form_validation->run() == false) {
      if ($id == 'admin_tacacs') {
        $data['gen'] = $this->admin_model->_getKodeOto('adname', 'account_tacac', 'admin_tacacs', 1);
      } elseif ($id == 'op_tacacs') {
        $data['gen'] = $this->admin_model->_getKodeOto('adname', 'account_tacac', 'op_tacacs', 1);
      }
      $data['webconf'] = $this->admin_model->getWebconf();
      $data['group'] = $id;
      $data['view_name'] = 'admin/create_account_tacac';
      $this->load->view('template', $data);
    } else {
      $dataLog = 'Create '.$id.'';
      $this->admin_model->insertLog($dataLog);
      $this->admin_model->createAccountTacac();
      notify('Pembuatan Akun Berhasil Dilakukan', 'success', 'accountTacac');
    }
  }

  public function detailAccountTacac($id)//fungsi controler untuk menampilkan halaman detail akun tacac berdasarkan id yang dipilih
  {
    if($this->input->post('deleteAccountTacac')){$this->admin_model->deleteAccountTacac();}
    $data['accounttacac'] = $this->admin_model->getDetailAccountTacac($id);
    $data['webconf'] = $this->admin_model->getWebconf();
    $data['view_name'] = "admin/detail_account_tacac";
    $this->load->view('template', $data);
  }

  public function exportXml()//fungsi controler untuk melakukan export xml ke folder yang di tentukan
  {
    $this->admin_model->exportXml();
    notify('xml Berhasil Di export', 'Success', 'accountTacac');
  }

  public function webconf()//fungsi controle untuk mengkonfigurasi website
  {

    if ($this->input->post('updateInfo')) {
      $this->admin_model->updateInfo();
    } else if ($this->input->post('updateColor')) {
      $this->admin_model->updateColor();
    }
    $data['webconf'] = $this->admin_model->getWebconf();
    $data['view_name'] = 'admin/webconf';
    $this->load->view('template', $data);
  }
}
