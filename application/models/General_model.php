<?php
defined('BASEPATH') or exit('No direct script access allowed');
class General_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
	}
  
  public function getWebconf($table, $whereVar, $whereVal)
  {
    return $this->db->get_where($table, $where = array($whereVar => $whereVal))->row();
  }

  public function login($username)
  {
      return $this->db->get_where('account', ['username' => $username])->row_array();
  }


}
