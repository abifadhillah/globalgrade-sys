<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }

  function index(){
    $this->load->view('view_login');
  }

  function auth(){
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $validate = $this->model_login->validate($username,$password);
    if($validate->num_rows() > 0){
        $data     = $validate->row_array();
        $name     = $data['nama_user'];
        $username = $data['username'];
        $level    = $data['user_level'];
        $passowrd = $data['password'];
        $sesdata  = array(
            'name'      => $name,
            'username'  => $username,
            'level'     => $level,
            'password' => $password,
            'logged_in' => TRUE,
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === 'admin'){
            redirect('home');

        // access login for users
      }elseif($level === 'user'){
            redirect('home');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

}
