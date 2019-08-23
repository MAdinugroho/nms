<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
    ini_set('max_execution_time', 0); 
    ini_set('memory_limit','2048M');
  }

  public function _getKodeOto($field, $table, $prefix, $length)
  {
      global $db;
      $var = $this->db->query("SELECT $field FROM $table WHERE $field REGEXP '{$prefix}[0-100]{{$length}}' ORDER BY $field DESC");

      $var = $var->row_array()[$field];

      if($var){
          return $prefix . substr( str_repeat('0', $length) . (substr($var, - $length) + 1), - $length );
      } else {
          return $prefix . str_repeat('0', $length - 1) . 2;
      }
  }


  public function getDataRow($table, $whereVar, $whereVal)
  {
    return $this->db->get_where($table, $where = array($whereVar => $whereVal))->row();
  }

  public function cDashboard()
  {
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    $data['view_name'] = 'dashboard';
    return $data;
  }

  public function cWebconf()
  {
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    $data['view_name'] = 'webconf';
    return $data;
  }

  public function updateInfo()
  {
    $this->db->where($where = array('id' => 1));
    if ($this->db->update('webconf', $data = array('office_name' => $this->input->post('office_name'), 'slogan' => $this->input->post('slogan'), 'description' => $this->input->post('description'), 'office_address' => $this->input->post('office_address'), 'office_phone_number' => $this->input->post('office_phone_number')))) {
      notify('Selamat Data Berhasil Diubah ', 'success', 'webconf');
    }
  }

  public function updateEmail()
  {
    $this->db->where($where = array('id' => 1));
    if ($this->db->update('webconf', $data = array('host' => $this->input->post('host'), 'crypto' => $this->input->post('crypto'), 'port' => $this->input->post('port'), 'email' => $this->input->post('email'), 'password' => $this->input->post('password')))) {
      notify('Konfigurasi Email Berhasil Diubah ', 'success', 'webconf');
    }
  }

  public function updateColor()
  {
    $this->db->where($where = array('id' => 1));
    if ($this->db->update('webconf', $data = array('main_color' => $this->input->post('main_color')))) {
      notify('Konfigurasi Warna Berhasil Diubah ', 'success', 'webconf');
    }
  }

  public function cAccountTacac()
  {
    $data['account_tacac'] = $this->db->get('account_tacac')->result();
    // $data['account'] = $this->db->query('select * from account where username LIKE "%'.$keyword.'%" or fullname LIKE "%'.$keyword.'%" or email LIKE "%'.$keyword.'%"')->result();
    $data['view_name'] = 'account_tacac';
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    return $data;
  }


  public function createAccountTacac()
  {

    // $output = shell_exec('tacdes AdminTac01');
    // $trim = trim($output, "Encrypted AdminTac01 is ");
    // var_dump($trim);die;

    $data = array(
      'username' => $this->input->post('username'),
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password'),
      'adname' => $this->input->post('adname'),
      'group' => $this->input->post('group'),
      'status' => 1,
    );
    
    $this->db->insert('account_tacac', $data);

    Shell_exec('powershell.exe new-aduser -name "'.$data['username'].'" -userprincipalname "domain_user@bigfirm.biz" -samaccountname "'.$data['username'].'" -accountpassword (convertto-securestring "'.$data['password'].'" -asplaintext -force) -changepasswordatlogon $false  -enabled $true');
    // var_dump($output);die;
    sleep(3);
    Shell_exec('powershell.exe Add-ADGroupMember Administrators '.$data['username'].'');
    sleep(1);
    Shell_exec('powershell.exe Add-ADGroupMember '.$data['group'].' '.$data['username'].'');
    sleep(1);
    notify('Pembuatan Akun Berhasil Dilakukan', 'success', 'accountTacac');
  }

  public function getDetailAccountTacac($id)
  {
    $where = array(
      'id' => $id
     );

     $query = $this->db->get_where('account_tacac',$where);
     return $query->row();
  }

  public function exportXml()
  {
    $query=$this->db->query("SELECT * FROM account_tacac ORDER BY id")->result();;
    // $data = array($query);
    //  var_dump($query);die;

    //Inisiasi Helper Adi//
    $this->load->helper('xml');
    //Memasukan Data xml Dom ke variabel $dom//
    $dom = xml_dom();
    $Authentication = xml_add_child($dom, 'Authentication');
    xml_add_attribute($Authentication, 'xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
    xml_add_attribute($Authentication, 'xmlns:xsd', 'http://www.w3.org/2001/XMLSchema');
    $UserGroups= xml_add_child($Authentication, 'UserGroups', ''); 
    foreach ($query as $item) : if ($item->group != 'admin_tacacs') {continue;}
    $UserGroup = xml_add_child($UserGroups, 'UserGroup', '');
    xml_add_child($UserGroup, 'name', ""."$item->name"."");
    xml_add_child($UserGroup, 'AuthenticationType', 'Windows_Domain');
    xml_add_child($UserGroup, 'LDAPServer', 'adi');
    xml_add_child($UserGroup, 'LDAPUserDirectorySubtree', 'Windows_Domain');
    xml_add_child($UserGroup, 'LDAPGroupName', ""."$item->group"."");
    xml_add_child($UserGroup, 'LDAPAccessUserName', 'adi');
    $LDAPAccessUserPassword = xml_add_child($UserGroup, 'LDAPAccessUserPassword', '');
    xml_add_attribute($LDAPAccessUserPassword, 'ClearText', '');
    xml_add_attribute($LDAPAccessUserPassword, 'DES', 'uTWkimSCBH1j8ZJB/5LPKA==');
    endforeach;

    foreach ($query as $item) : if ($item->group != 'op_tacacs') {continue;}
    $UserGroup = xml_add_child($UserGroups, 'UserGroup', '');
    xml_add_child($UserGroup, 'name', ""."$item->name"."");
    xml_add_child($UserGroup, 'AuthenticationType', 'Windows_Domain');
    xml_add_child($UserGroup, 'LDAPServer', 'adi');
    xml_add_child($UserGroup, 'LDAPUserDirectorySubtree', 'Windows_Domain');
    xml_add_child($UserGroup, 'LDAPGroupName', ""."$item->group"."");
    xml_add_child($UserGroup, 'LDAPAccessUserName', 'adi');
    $LDAPAccessUserPassword = xml_add_child($UserGroup, 'LDAPAccessUserPassword', '');
    xml_add_attribute($LDAPAccessUserPassword, 'ClearText', '');
    xml_add_attribute($LDAPAccessUserPassword, 'DES', 'uTWkimSCBH1j8ZJB/5LPKA==');
    endforeach;
    //  xml_print($dom, $return = false);
    $dom->formatOutput = true;
    $string_value = $dom->saveXML();
    $dom->save("example.xml");
  }
}
