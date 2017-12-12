<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class User_model extends CI_Model
{

  public function login_user($data)
  {
    // $this->db->select('*');
    // $this->db->from('mahasiswa');
    // $this->db->where('username',$user);
    // $this->db->where('password',$pass);
    // $this->db->where('level',$level);
    $query=$this->db->get_where('user',$data);
    return $query;
  }
}

?>
