<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
    ini_set('max_execution_time', 0);
    ini_set('memory_limit', '2048M');
  }

  //======CORE FUNCTION======//
  public function _getKodeOto($field, $table, $prefix, $length)
  {
    global $db;
    $var = $this->db->query("SELECT $field FROM $table WHERE $field REGEXP '{$prefix}[0-9]{{$length}}' ORDER BY $field DESC");

    $var = $var->row_array()[$field];

    if ($var) {
      return $prefix . substr(str_repeat('0', $length) . (substr($var, -$length) + 1), -$length);
    } else {
      return $prefix . str_repeat('0', $length - 1) . 2;
    }
  }

  public function getWebconf()
  {
    $where = array(
      'id' => 1
    );
    return $this->db->get_where('webconf', $where)->row();
  }


  //======ACCOUNT FUNCTION======//
  public function getAccount()
  {
    return $this->db->get('account')->result();
  }

  public function getDetailAccount($id)
  {
    $where = array(
      'id' => $id
    );

    $query = $this->db->get_where('account', $where);
    return $query->row();
  }

  public function createAccount()
  {
    date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d');

    $data = array(
      'username' => $this->input->post('username'),
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
      'level' => $this->input->post('level'),
      'date_created' => $now,
      'status' => 1,
    );

    $this->db->insert('account', $data);
  }

  public function deleteAccount()
  {
    $password = $this->input->post('password');
    if (password_verify($password, $this->session->userdata['password'])) {
      if ($this->input->post('status') == 0) {
        notify('Super Akun Tidak Dapat Dihapus', 'error', 'account');
      } else {
        $this->db->delete('account', array('id' => $this->input->post('id')));
        notify('Akun Berhasil Dihapus ', 'success', 'account');
      }
    } else {
      notify('Password Yang Anda Masukan Tidak Cocok ', 'error', 'account');
    }
  }



  //======ACCOUNT TACAC FUNCTION======//
  public function getAccountTacac()
  {
    return $this->db->get('account_tacac')->result();
  }

  public function getDetailAccountTacac($id)
  {
    $where = array(
      'id' => $id
    );

    $query = $this->db->get_where('account_tacac', $where);
    return $query->row();
  }

  public function createAccountTacac()
  {

    $output = shell_exec('tacdes '.$this->input->post('password').'');
    $passwordtrim = trim($output, "Encrypted ".$this->input->post('password')." is ");
    // var_dump($trim);die;

    $data = array(
      'username' => $this->input->post('username'),
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => $passwordtrim,
      'adname' => $this->input->post('adname'),
      'group' => $this->input->post('group'),
      'status' => 1,
    );

    $password = $this->input->post('password');

    $this->db->insert('account_tacac', $data);

    Shell_exec('powershell.exe new-aduser -name "' . $data['username'] . '" -userprincipalname "' . $data['email'] . '" -samaccountname "' . $data['username'] . '" -accountpassword (convertto-securestring "' . $password . '" -asplaintext -force) -changepasswordatlogon $false  -enabled $true');
    // var_dump($output);die;
    sleep(2);
    Shell_exec('powershell.exe Add-ADGroupMember Administrators ' . $data['username'] . '');
    sleep(1);
    Shell_exec('powershell.exe Add-ADGroupMember ' . $data['group'] . ' ' . $data['username'] . '');
    sleep(1);
  }

  public function deleteAccountTacac()
  {
    $password = $this->input->post('password');
    if (password_verify($password, $this->session->userdata['password'])) {
      if ($this->input->post('status') == 0) {
        notify('Super Akun Tidak Dapat Dihapus', 'error', 'accountTacac');
      } else {
        Shell_exec('powershell.exe Remove-ADUser -Identity '.$this->input->post('username').' -Confirm:$false');
        $this->db->delete('account_tacac', array('id' => $this->input->post('id')));
        notify('Akun Berhasil Dihapus ', 'success', 'accountTacac');
      }
    } else {
      notify('Password Yang Anda Masukan Tidak Cocok ', 'error', 'accountTacac');
    }
  }

  public function exportXml()
  {
    $query = $this->db->query("SELECT * FROM account_tacac ORDER BY id")->result();;
    // $data = array($query);
    //  var_dump($query);die;

    //Inisiasi Helper Adi//
    $this->load->helper('xml');
    //Memasukan Data xml Dom ke variabel $dom//
    $dom = xml_dom();
    $Authentication = xml_add_child($dom, 'Authentication');
    xml_add_attribute($Authentication, 'xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
    xml_add_attribute($Authentication, 'xmlns:xsd', 'http://www.w3.org/2001/XMLSchema');
    $UserGroups = xml_add_child($Authentication, 'UserGroups', '');
    foreach ($query as $item) : if ($item->group != 'admin_tacacs') {
        continue;
      }
      $UserGroup = xml_add_child($UserGroups, 'UserGroup', '');
      xml_add_child($UserGroup, 'Name', "" . "$item->adname" . "");
      xml_add_child($UserGroup, 'AuthenticationType', 'Windows_Domain');
      xml_add_child($UserGroup, 'LDAPServer', '10.42.12.180:389');
      xml_add_child($UserGroup, 'LDAPUserDirectorySubtree', 'cn=Users,DC=tacacs,DC=local');
      xml_add_child($UserGroup, 'LDAPGroupName', "" . "$item->group" . "");
      xml_add_child($UserGroup, 'LDAPAccessUserName', "" . "$item->username" . "");
      $LDAPAccessUserPassword = xml_add_child($UserGroup, 'LDAPAccessUserPassword', '');
      xml_add_attribute($LDAPAccessUserPassword, 'ClearText', '');
      xml_add_attribute($LDAPAccessUserPassword, 'DES', "" . "$item->password" . "");
    endforeach;

    foreach ($query as $item) : if ($item->group != 'op_tacacs') {
        continue;
      }
      $UserGroup = xml_add_child($UserGroups, 'UserGroup', '');
      xml_add_child($UserGroup, 'Name', "" . "$item->adname" . "");
      xml_add_child($UserGroup, 'AuthenticationType', 'Windows_Domain');
      xml_add_child($UserGroup, 'LDAPServer', '10.42.12.180:389');
      xml_add_child($UserGroup, 'LDAPUserDirectorySubtree', 'cn=Users,DC=tacacs,DC=local');
      xml_add_child($UserGroup, 'LDAPGroupName', "" . "$item->group" . "");
      xml_add_child($UserGroup, 'LDAPAccessUserName', "" . "$item->username" . "");
      $LDAPAccessUserPassword = xml_add_child($UserGroup, 'LDAPAccessUserPassword');
      xml_add_attribute($LDAPAccessUserPassword, 'ClearText', '');
      xml_add_attribute($LDAPAccessUserPassword, 'DES', "" . "$item->password" . "");
    endforeach;

      $UserGroup = xml_add_child($UserGroups, 'UserGroup', '');
      xml_add_child($UserGroup, 'Name', 'Local System Administrators');
      xml_add_child($UserGroup, 'AuthenticationType', 'localhost');
      xml_add_child($UserGroup, 'LocalhostGroupName', 'Administrators');

      $UserGroup = xml_add_child($UserGroups, 'UserGroup', '');
      xml_add_child($UserGroup, 'Name', 'DEFAULT');
      xml_add_child($UserGroup, 'AuthenticationType', 'localhost');
      xml_add_child($UserGroup, 'LocalhostGroupName', 'Administrators');
    //  xml_print($dom, $return = false);
    $dom->formatOutput = true;
    $string_value = $dom->saveXML();
    $dom->save("authentication.xml");

  
  }


  //======WEB CONFIGURATION FUNCTION======//
  public function updateInfo()
  {
    $this->db->where(array('id' => 1));
    if ($this->db->update('webconf', array('office_name' => $this->input->post('office_name'), 'slogan' => $this->input->post('slogan'), 'description' => $this->input->post('description'), 'office_address' => $this->input->post('office_address'), 'office_phone_number' => $this->input->post('office_phone_number')))) {
      notify('Selamat Data Berhasil Diubah ', 'success', 'webconf');
    }
  }

  public function updateEmail()
  {
    $this->db->where(array('id' => 1));
    if ($this->db->update('webconf', array('host' => $this->input->post('host'), 'crypto' => $this->input->post('crypto'), 'port' => $this->input->post('port'), 'email' => $this->input->post('email'), 'password' => $this->input->post('password')))) {
      notify('Konfigurasi Email Berhasil Diubah ', 'success', 'webconf');
    }
  }

  public function updateColor()
  {
    $this->db->where(array('id' => 1));
    if ($this->db->update('webconf', array('main_color' => $this->input->post('main_color')))) {
      notify('Konfigurasi Warna Berhasil Diubah ', 'success', 'webconf');
    }
  }
}
