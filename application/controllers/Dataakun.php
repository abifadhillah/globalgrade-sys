<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataakun extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }

		$this->load->model('Model_akun');
	}

    public function index()
    {
			if($this->session->userdata('level') !== 'user'){
        $this->load->view('akun/view_akun');
        $this->load->view('akun/form_addakun');
			} else
			{
				redirect('Error403');
			}
    }

		public function akun_user()
		{
				$this->load->view('akun/view_user');
				$this->load->view('akun/form_addakun');
		}

    public function Akun()
    {
				if($this->session->userdata('level') !== 'user'){
        $Akun = $this->Model_akun->getdataakun();
        $no =1;
        foreach ($Akun as  $value) {
            $tbody = array();
            $tbody[] = $no++;
            $tbody[] = $value['nama_user'];
            $tbody[] = $value['username'];
            $tbody[] = $value['user_level'];
            $tbody[] = $value['password'];
						$gantipassword = "<button class='btn btn-success ubah-password' data-toggle='modal' data-id=".$value['id'].">Ganti Password</button>";
						$tbody[] = $gantipassword;
            $aksi= "<button class='btn btn-success ubah-akun' data-toggle='modal' data-id=".$value['id'].">Ubah</button>".' '."<button class='btn btn-danger hapus-akun' id='id' data-toggle='modal' data-id=".$value['id'].">Hapus</button>";
            $tbody[] = $aksi;
            $data[	] = $tbody;
        }
        if ($Akun) {
            echo json_encode(array('data'=> $data));
        }else{
            echo json_encode(array('data'=>0));
      }
				} else
				{
					redirect('Error403');
				}
    }

    public function tambahakun()
    {
        // didapat dari ajax yang dimana data{nama_user:nama_user,username:username,password:password,user_level:user_level}
				if($this->session->userdata('level') !== 'user'){
        $nama_user = $this->input->post('nama_user');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $user_level = $this->input->post('user_level');

        $tambahakun = array (
            'nama_user'=>$nama_user,
            'username' => $username,
            'password' => $password,
            'user_level' => $user_level
        );

        $data = $this->Model_akun->inputakun($tambahakun);

        echo json_encode($data);
				} else
				{
					redirect('Error403');
				}
    }

    public function formedit()
    {
				if($this->session->userdata('level') !== 'user'){
        // id yang telah diparsing pada ajax form_editakun.php data{id:id}
        $id = $this->input->post('id');

        $data['dataperakun'] = $this->Model_akun->dataakunedit($id);
        $this->load->view('akun/form_editakun',$data);
				} else
				{
					redirect('Error403');
				}
    }

    public function ubahakun()
    {
				if($this->session->userdata('level') !== 'user'){
        $objdata = array(
            'nama_user'=>$this->input->post('editnama_user'),
            'username'=>$this->input->post('editusername'),
            'user_level'=>$this->input->post('edituser_level')
        );

        $id = $this->input->post('id');
        $data = $this->Model_akun->ubahakun($objdata,$id);

        echo json_encode($data);
				} else
				{
					redirect('Error403');
				}
    }
		public function formeditpassword()
		{
				if($this->session->userdata('level') !== 'user'){
				// id yang telah diparsing pada ajax form_editakun.php data{id:id}
				$id = $this->input->post('id');

				$data['dataperakun'] = $this->Model_akun->dataakunedit($id);
				$this->load->view('akun/form_editpassword',$data);
				} else
				{
					redirect('Error403');
				}
		}

		public function ubahpassword()
    {
				if($this->session->userdata('level') !== 'user'){
        $objdata = array(
            'password'=>md5($this->input->post('editpassword')),

        );

        $id = $this->input->post('id');
        $data = $this->Model_akun->ubahakun($objdata,$id);

        echo json_encode($data);
				} else
				{
					redirect('Error403');
				}
    }

    public function hapusakun()
    {
				if($this->session->userdata('level') !== 'user'){
         // id yang telah diparsing pada ajax form_addakun.php data{id:id}
         $id = $this->input->post('id');

         $data = $this->Model_akun->hapusdataakun($id);
         echo json_encode($data);
					 } else
					{
						redirect('Error403');
					}
    }
}
