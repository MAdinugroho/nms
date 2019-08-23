<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
    $this->load->view('template', $this->admin_model->cDashboard());
  }

  public function webconf()
  {

    if ($this->input->post('updateInfo')) {
      $this->admin_model->updateInfo();
    } else if ($this->input->post('updateEmail')) {
      $this->admin_model->updateEmail();
    } else if ($this->input->post('updateColor')) {
      $this->admin_model->updateColor();
    }

    $this->load->view('template', $this->admin_model->cWebconf());
  }

  public function accountTacac()
  {
    if ($this->input->post('checkgroup')) {
      redirect(base_url('createAccountTacac/' . $this->input->post('group')));
    } else {
      // if ($this->input->post('addAccountTacac')) {$this->admin_model->addAccountTacac();}
      $this->load->view('template', $this->admin_model->cAccountTacac());
    }
  }

  public function createAccountTacac($id)
  {
    if ($this->input->post('createAccountTacac')) {
      $this->admin_model->createAccountTacac();
      // $this->admin_model->sentToLdap();
     }else {
      if ($id == 'admin_tacacs') {
        $data['gen'] = $this->admin_model->_getKodeOto('adname', 'account_tacac', 'admin_tacacs', 2);
      } elseif ($id == 'op_tacacs') {
        $data['gen'] = $this->admin_model->_getKodeOto('adname', 'account_tacac', 'op_tacacs', 2);
      }
      $data['webconf'] = $this->admin_model->getDataRow('webconf', 'id', 1);
      $data['group'] = $id;
      $data['view_name'] = 'create_account_tacac';
      $this->load->view('template', $data);
    }
  }

  public function detailAccountTacac($id)
    {
      $data['accounttacac'] = $this->admin_model->getDetailAccountTacac($id);
      var_dump($data['accounttacac']);die;
      $data['view_name'] = "]admin/detail_account_tacac";
      $this->load->view('template', $data);
    }

  public function exportXml()
  {
    $this->admin_model->exportXml();
    notify('xml Berhasil Di export', 'Success', 'accountTacac');
  }

  public function test()
  {
    Shell_Exec('powershell.exe copy example.xml ../../"');
    notify('xml Berhasil di copy', 'Success', 'accountTacac');
    // exec("C:\Users\Nugie\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Windows PowerShell");
  }
}
