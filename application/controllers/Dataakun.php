<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataakun extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }

    $this->load->model('Model_Akun');
  }

  public function index()
  {
    if ($this->session->userdata('level') !== 'user') {
      $data['title'] = "Garuda Indonesia - Data Akun";
      $this->load->view('akun/View_Akun', $data);
      $this->load->view('akun/Form_addakun');
    } else {
      redirect('Error403');
    }
  }

  public function akun_user()
  {
    $data['title'] = "Garuda Indonesia - Data Akun";
    $this->load->view('akun/View_Akun', $data);
    $this->load->view('akun/Form_addakun');
  }

  public function Akun()
  {
    if ($this->session->userdata('level') !== 'user') {
      $Akun = $this->Model_Akun->getdataakun();
      $no = 1;
      foreach ($Akun as  $value) {
        $tbody = array();
        $tbody[] = $no++;
        $tbody[] = $value['nama_user'];
        $tbody[] = $value['username'];
        $tbody[] = $value['user_level'];
        $tbody[] = $value['password'];
        $gantipassword = "<button class='btn btn-success ubah-password' data-toggle='modal' data-id=" . $value['id'] . ">Ganti Password</button>";
        $tbody[] = $gantipassword;
        $aksi = "<button class='btn btn-success ubah-akun' data-toggle='modal' data-id=" . $value['id'] . ">Ubah</button>" . ' ' . "<button class='btn btn-danger hapus-akun' id='id' data-toggle='modal' data-id=" . $value['id'] . ">Hapus</button>";
        $tbody[] = $aksi;
        $data[] = $tbody;
      }
      if ($Akun) {
        echo json_encode(array('data' => $data));
      } else {
        echo json_encode(array('data' => 0));
      }
    } else {
      redirect('Error403');
    }
  }

  public function tambahakun()
  {
    // didapat dari ajax yang dimana data{nama_user:nama_user,username:username,password:password,user_level:user_level}
    if ($this->session->userdata('level') !== 'user') {
      $nama_user = $this->input->post('nama_user');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $user_level = $this->input->post('user_level');

      $tambahakun = array(
        'nama_user' => $nama_user,
        'username' => $username,
        'password' => $password,
        'user_level' => $user_level
      );

      $data = $this->Model_Akun->inputakun($tambahakun);

      echo json_encode($data);
    } else {
      redirect('Error403');
    }
  }

  public function formedit()
  {
    if ($this->session->userdata('level') !== 'user') {
      // id yang telah diparsing pada ajax form_editakun.php data{id:id}
      $id = $this->input->post('id');

      $data['dataperakun'] = $this->Model_Akun->dataakunedit($id);
      $this->load->view('akun/Form_editakun', $data);
    } else {
      redirect('Error403');
    }
  }

  public function ubahakun()
  {
    if ($this->session->userdata('level') !== 'user') {
      $objdata = array(
        'nama_user' => $this->input->post('editnama_user'),
        'username' => $this->input->post('editusername'),
        'user_level' => $this->input->post('edituser_level')
      );

      $id = $this->input->post('id');
      $data = $this->Model_Akun->ubahakun($objdata, $id);

      echo json_encode($data);
    } else {
      redirect('Error403');
    }
  }
  public function formeditpassword()
  {
    if ($this->session->userdata('level') !== 'user') {
      // id yang telah diparsing pada ajax form_editakun.php data{id:id}
      $id = $this->input->post('id');

      $data['dataperakun'] = $this->Model_Akun->dataakunedit($id);
      $this->load->view('akun/Form_editpassword', $data);
    } else {
      redirect('Error403');
    }
  }

  public function ubahpassword()
  {
    if ($this->session->userdata('level') !== 'user') {
      $objdata = array(
        'password' => md5($this->input->post('editpassword')),

      );

      $id = $this->input->post('id');
      $data = $this->Model_Akun->ubahakun($objdata, $id);

      echo json_encode($data);
    } else {
      redirect('Error403');
    }
  }

  public function hapusakun()
  {
    if ($this->session->userdata('level') !== 'user') {
      // id yang telah diparsing pada ajax form_addakun.php data{id:id}
      $id = $this->input->post('id');

      $data = $this->Model_Akun->hapusdataakun($id);
      echo json_encode($data);
    } else {
      redirect('Error403');
    }
  }
}
