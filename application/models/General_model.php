<?php
defined('BASEPATH') or exit('No direct script access allowed');
class General_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function getNumRow($table, $whereVar1, $whereVal1)
  {
    return $this->db->get_where($table, $where = array($whereVar1 => $whereVal1))->num_rows();
  }

  public function updateData($table, $whereVar, $whereVal, $setVar, $setVal)
  {
    $this->db->where($where = array($whereVar => $whereVal));
    return $this->db->update($table, $data = array($setVar => $setVal));
  }

  public function getWebconf() // memanggil konfigurasi website
  {
    $where = array(
      'id' => 1
    );
    return $this->db->get_where('webconf', $where)->row();
  }

  public function login($username)//Fungsi Model Login
  {
    return $this->db->get_where('account', ['username' => $username])->row_array();
  }

  public function updateLastLog()//Menampilkan Sesion Terahir
  {
    date_default_timezone_set('Asia/Jakarta'); 
    $data = array(
      'lastaccess' => $this->session->userdata['username'],
      'timeaccess'  => date("Y-m-d H:i:s")
    );
    $this->db->update('webconf', $data);
  }

  public function insertLog($dataLog)//Memasukan Log Dashboard ke Database
  {
    date_default_timezone_set('Asia/Jakarta'); 
    $data = array(
      'name' => $this->session->userdata['username'],
      'time'  => date("Y-m-d H:i:s"),
      'status' => $dataLog
    );
    $this->db->insert('log', $data);
  }

  public function resetPassword()//Buat Reset Password
  {
    if ($this->getNumRow('account', 'email', $this->input->post('email')) > 0) {
      $newPassword = rand(100000, 999999);
      $this->updateData('account', 'email', $this->input->post('email'), 'password', password_hash($newPassword, PASSWORD_BCRYPT));
      // $this->sentEmail($this->input->post('email'), $this->getDataRow('account', 'email', $this->input->post('email'))->fullname, 'Reset Password', 'Password anda '.$newPassword);
      notify('Password baru anda andalah ' . $newPassword . '. Harap mengganti password di menu profile', 'success', 'login');
    } else {
      notify('Data yang anda masukan salah.', 'error', 'forgotPassword');
    }
  }


  public function getDetailUser($id)// Detail Profile
  {
    $where = array(
      'id' => $id
    );

    $query = $this->db->get_where('account', $where);
    return $query->row();
  }

  public function updateProfile($id)// Buat Update Profile
  {
    date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
    $now = date('Y-m-d');

    $where = array(
      'id' => $id
    );
    if ($this->input->post('password') == "") {
      $data = [
        'username' => htmlspecialchars($this->input->post('username', true)),
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'date_created' => $now,
      ];
    } else {
      $data = [
        'username' => htmlspecialchars($this->input->post('username', true)),
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        'desc' => htmlspecialchars($this->input->post('desc', true)),
        'date_created' => $now,
      ];
    }

    $this->db->update('account', $data, $where);
  }

  public function getUpdatedProfile()// Ambil data sesudah di update
  {
    $where = array('id' => $this->session->userdata['id']);
    $query = $this->db->get_where('account', $where);
    return $query->row();
  }
}
