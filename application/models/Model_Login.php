<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model{
	// function cek_login($table,$where){
	// 	return $this->db->get_where($table,$where);
	// }
	//
	// public function add_user($input){
	//
	// 	//insert into tablepasien values("");
	// 	$this->db->insert('login',$input);
  // }
	function validate($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result = $this->db->get('user',1);
    return $result;
  }

  public function getUser($idLogin) {
    $sql = $this->db->query("SELECT * FROM user WHERE id_user = {$idLogin}");
    return $sql->row();
  }
}
