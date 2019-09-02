<?php
defined('BASEPATH') or exit('No direct script access allowed');
class General_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
	}
  
  public function getWebconf()
  {
    $where = array(
      'id' => 1
    );
    return $this->db->get_where('webconf', $where)->row();
  }

  public function login($username)
  {
      return $this->db->get_where('account', ['username' => $username])->row_array();
  }

    public function getDetailUser($id)
  {
    $where = array(
      'id' => $id  
     );

     $query = $this->db->get_where('account',$where);
     return $query->row();
  }

  public function updateProfile($id)
    {
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d');
        
        $where = array(
            'id' => $id  
           );
           if ($this->input->post('password')=="") {
        $data = [
          'username' => htmlspecialchars($this->input->post('username', true)),
          'name' => htmlspecialchars($this->input->post('name', true)),
          'email' => htmlspecialchars($this->input->post('email', true)),
          'date_created' => $now,
        ];
      } else{
        $data = [
          'username' => htmlspecialchars($this->input->post('username', true)),
          'name' => htmlspecialchars($this->input->post('name', true)),
          'email' => htmlspecialchars($this->input->post('email', true)),
          'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
          'date_created' => $now,
      ];
      }

        $this->db->update('account', $data,$where);
    }

    public function getUpdatedProfile()
  {
    $where = array('id' => $this->session->userdata['id']);
     $query = $this->db->get_where('account',$where);
     return $query->row();

  }

}
