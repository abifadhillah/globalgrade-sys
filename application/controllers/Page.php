<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function admin(){
    //Allowing akses to admin only
      if($this->session->userdata('level')=='admin'){
          $this->load->view('tampil_home');
      }else{
          echo "Access Denied";
      }

  }

  function users(){
    //Allowing akses to user only
    if($this->session->userdata('level')=='user'){
      $this->load->view('tampil_home');
    }else{
        echo "Access Denied";
    }
  }

}
