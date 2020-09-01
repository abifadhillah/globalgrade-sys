<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_unit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}
   		$this->load->model('Model_businessunit');
	}


	public function index()
	{
		$this->load->view('Business_unit/View_businessunit');
		$data['biz_diversity'] = $this->Model_businessunit->tampil_data();
 		$data['complexityparent'] = $this->Model_businessunit->tampil_data1();
 		$data['geographical'] = $this->Model_businessunit->tampil_data2();
 		$data['complexitysub'] = $this->Model_businessunit->tampil_data3();
		$this->load->view('Business_unit/Form_addbusinessunit',$data);
	}

	public function Databusiness()
    {

        $Databusiness = $this->Model_businessunit->getdatabusiness();
        $no =1;
        foreach ($Databusiness as  $value) {
            $tbody = array();
            $tbody[] = $no++;
            $tbody[] = $value['company_code'];
            $tbody[] = $value['company_name'];
            $tbody[] = '$'.$value['revenue'].'M';
            $tbody[] = $value['fte'];
            $tbody[] = $value['company_role'];
            $tbody[] = $value['biz_diversity'];
            $tbody[] = $value['biz_complexity'];
            $tbody[] = $value['geo_breadth'];
            $tbody[] = $value['grade_sub'];
            $aksi= "<button class='btn btn-block fas fa-edit btn-primary btn-flat ubah-business' data-toggle='modal' data-id=".$value['id']."></button>".' '."<button class='btn btn-block fas fa-trash-alt btn-danger btn-flat hapus-business' id='id' data-toggle='modal' data-id=".$value['id']."></button>";
            $tbody[] = $aksi;
            $data[] = $tbody;
        }
        if ($Databusiness) {
            echo json_encode(array('data'=> $data));
        }else{
            echo json_encode(array('data'=>0));
        }
    }

	public function tambahbusinessunit()
	{
		$company_code = $this->input->post('company_code');
		$this->db->select('company_code');
		$this->db->where('company_code',$company_code);
		$query = $this->db->get('business_unit');
		$num = $query->num_rows();
		if ($num > 0)
		{
			echo '<script>alert("Duplicate Data Entry, Please Input Different Value");document.location="index" </script>';
			
		}
		else {
		$company_name = $this->input->post('company_name');
		$this->db->select('company_name');
		$this->db->where('company_name',$company_name);
		$query = $this->db->get('business_unit');
		$num = $query->num_rows();
		if ($num > 0)
		{
			echo '<script>alert("Duplicate Data Entry, Please Input Different Value");document.location="index" </script>';
			
		}
		else{
		$revenue = $this->input->post('revenue');
		$fte = $this->input->post('fte');
		$company_role = $this->input->post('company_role');
		$biz_diversity = $this->input->post('biz_diversity');
		$biz_complexity = $this->input->post('biz_complexity');
		$geo_breadth = $this->input->post('geo_breadth');
		$grade_sub = $this->input->post('grade_sub');


		if($company_role){
		  $revenue1 = "";
		  $biz1 = "";
		  $fte1 ="";
		  $biz_com1 = "";
		  $geo1 = "";
		  $div_p = "";
		  $akhir = "";
		  $grade_sub = "";

		   if($revenue == "" || $biz_diversity == "" || $fte == "" || $biz_complexity == "" || $geo_breadth == ""){
		    ?> <!-- <script>alert("Nilai nya belum diisi!"); </script> --> <?php
		   }elseif ($revenue >= "0" && $revenue <= "75") {
		    $revenue1 = "16";
		   }elseif ($revenue > "75" && $revenue <= "150") {
		    $revenue1 = "17";
		   }elseif ($revenue > "150" && $revenue <= "500") {
		    $revenue1 = "18";
		   }elseif ($revenue > "500" && $revenue <= "1000") {
		    $revenue1 = "19";
		   }elseif ($revenue > "1000" && $revenue <= "2000") {
		    $revenue1 = "20";
		   }elseif ($revenue > "2000" && $revenue <= "5000") {
		    $revenue1 = "21";
		   }elseif ($revenue > "5000" && $revenue <= "10000") {
		    $revenue1 = "22";
		   }elseif ($revenue > "10000" && $revenue <= "50000") {
		     $revenue1 = "23";
		   }elseif ($revenue > "50000" && $revenue <= "100000") {
		     $revenue1 = "24";
		   }else{
		     $revenue1 = "25";
		   }

		   if ($fte >= "0" && $fte <= "90") {
		    $fte1 = "16";
		   }elseif ($fte > "90" && $fte <= "240") {
		    $fte1 = "17";
		   }elseif ($fte > "240" && $fte <= "620") {
		    $fte1 = "18";
		   }elseif ($fte > "620" && $fte <= "1600") {
		    $fte1 = "19";
		   }elseif ($fte > "1600" && $fte <= "4100") {
		    $fte1 = "20";
		   }elseif ($fte > "4100" && $fte <= "10600") {
		    $fte1 = "21";
		   }elseif ($fte > "10600" && $fte <= "27500") {
		    $fte1 = "22";
		   }elseif ($fte > "27500" && $fte <= "75000") {
		     $fte1 = "23";
		   }elseif ($fte > "75000" && $fte <= "200000") {
		     $fte1 = "24";
		   }else{
		     $fte1 = "25";
		   }

		  if ($biz_diversity == "Single industry / related product / services") {
		    $biz1 = "A";
		   }else {
		    $biz1 = "B";
		   }

		if ($biz_complexity == "Integrated with other Business Unit" OR $biz_complexity == "Non-complex business") {
		    $biz_com1 = "A";
		   }else {
		    $biz_com1 = "B";
		   }

		if ($geo_breadth == "Domestic") {
		    $geo1 = "A";
		   }elseif ($geo_breadth == "International") {
		    $geo1 = "B";
		   } else {
		    $geo1 = "C";
		   }

		if ($biz1 == "A" && $biz_com1 == "A") {
		  $div_p = "L";
		} elseif ($biz1 == "B" && $biz_com1 == "A") {
		  $div_p = "M";
		} elseif ($biz1 == "A" && $biz_com1 == "B") {
		  $div_p = "M";
		}  else {
		  $div_p = "H";
		}

		if ($div_p == "L" && $geo1 == "A") {
		  $akhir = "16";
		} elseif ($div_p == "L" && $geo1 == "B") {
		  $akhir = "19";
		} elseif ($div_p == "L" && $geo1 == "C") {
		  $akhir = "20";
		} elseif ($div_p == "M" && $geo1 == "A") {
		  $akhir = "18";
		} elseif ($div_p == "M" && $geo1 == "B") {
		  $akhir = "21";
		} elseif ($div_p == "M" && $geo1 == "C") {
		  $akhir = "22";
		} elseif ($div_p == "H" && $geo1 == "A") {
		  $akhir = "20";
		} elseif ($div_p == "H" && $geo1 == "B") {
		  $akhir = "23";
		} elseif ($div_p == "H" && $geo1 == "C") {
		  $akhir = "24";
		}


		    $grade_sub = ($revenue1 + $fte1 + $akhir)/3;
		    $grade_sub = floor($grade_sub);


		   }

		$data = array(
			'company_code'=>$company_code,
			'company_name'=>$company_name,
			'revenue'=>$revenue,
			'fte'=>$fte,
			'company_role'=>$company_role,
			'biz_diversity'=>$biz_diversity,
			'biz_complexity'=>$biz_complexity,
			'geo_breadth'=>$geo_breadth,
			'grade_sub'=>$grade_sub
			);

		$this->Model_businessunit->tambahbusinessunit($data);

		echo '<script>alert("Data Berhasil Direkam"); document.location="index"</script>';
	}
	}
}

	public function formedit()
		{
				// id yang telah diparsing pada ajax form_editpersk.php data{id:id}
				$id = $this->input->post('id');
				$data['biz_diversity'] = $this->Model_businessunit->tampil_data();
		 		$data['complexityparent'] = $this->Model_businessunit->tampil_data1();
		 		$data['geographical'] = $this->Model_businessunit->tampil_data2();
		 		$data['complexitysub'] = $this->Model_businessunit->tampil_data3();
				$data['databusiness'] = $this->Model_businessunit->databusinessedit($id);
				$this->load->view('Business_unit/Form_editbusiness',$data);

		}
	public function ubahbusiness()
		{
		$id = $this->input->post('id');
		$company_code = $this->input->post('company_code');
		$company_name = $this->input->post('company_name');
		$revenue = $this->input->post('revenue');
		$fte = $this->input->post('fte');
		$company_role = $this->input->post('company_role');
		$biz_diversity = $this->input->post('biz_diversity');
		$biz_complexity = $this->input->post('biz_complexity');
		$geo_breadth = $this->input->post('geo_breadth');
		$grade_sub = $this->input->post('grade_sub');

		 if($company_role){
		  $revenue1 = "";
		  $biz1 = "";
		  $fte1 ="";
		  $biz_com1 = "";
		  $geo1 = "";
		  $div_p = "";
		  $akhir = "";
		  $grade_sub = "";

		   if($revenue == "" || $biz_diversity == "" || $fte == "" || $biz_complexity == "" || $geo_breadth == ""){
		    ?> <script>alert("Nilai nya belum diisi!"); </script> <?php
		   }elseif ($revenue >= "0" && $revenue <= "75") {
		    $revenue1 = "16";
		   }elseif ($revenue > "75" && $revenue <= "150") {
		    $revenue1 = "17";
		   }elseif ($revenue > "150" && $revenue <= "500") {
		    $revenue1 = "18";
		   }elseif ($revenue > "500" && $revenue <= "1000") {
		    $revenue1 = "19";
		   }elseif ($revenue > "1000" && $revenue <= "2000") {
		    $revenue1 = "20";
		   }elseif ($revenue > "2000" && $revenue <= "5000") {
		    $revenue1 = "21";
		   }elseif ($revenue > "5000" && $revenue <= "10000") {
		    $revenue1 = "22";
		   }elseif ($revenue > "10000" && $revenue <= "50000") {
		     $revenue1 = "23";
		   }elseif ($revenue > "50000" && $revenue <= "100000") {
		     $revenue1 = "24";
		   }else{
		     $revenue1 = "25";
		   }

		   if ($fte >= "0" && $fte <= "90") {
		    $fte1 = "16";
		   }elseif ($fte > "90" && $fte <= "240") {
		    $fte1 = "17";
		   }elseif ($fte > "240" && $fte <= "620") {
		    $fte1 = "18";
		   }elseif ($fte > "620" && $fte <= "1600") {
		    $fte1 = "19";
		   }elseif ($fte > "1600" && $fte <= "4100") {
		    $fte1 = "20";
		   }elseif ($fte > "4100" && $fte <= "10600") {
		    $fte1 = "21";
		   }elseif ($fte > "10600" && $fte <= "27500") {
		    $fte1 = "22";
		   }elseif ($fte > "27500" && $fte <= "75000") {
		     $fte1 = "23";
		   }elseif ($fte > "75000" && $fte <= "200000") {
		     $fte1 = "24";
		   }else{
		     $fte1 = "25";
		   }

		  if ($biz_diversity == "Single industry / related product / services") {
		    $biz1 = "A";
		   }else {
		    $biz1 = "B";
		   }

		if ($biz_complexity == "Integrated with other Business Unit" OR $biz_complexity == "Non-complex business") {
		    $biz_com1 = "A";
		   }else {
		    $biz_com1 = "B";
		   }

		if ($geo_breadth == "Domestic") {
		    $geo1 = "A";
		   }elseif ($geo_breadth == "International") {
		    $geo1 = "B";
		   } else {
		    $geo1 = "C";
		   }

		if ($biz1 == "A" && $biz_com1 == "A") {
		  $div_p = "L";
		} elseif ($biz1 == "B" && $biz_com1 == "A") {
		  $div_p = "M";
		} elseif ($biz1 == "A" && $biz_com1 == "B") {
		  $div_p = "M";
		}  else {
		  $div_p = "H";
		}

		if ($div_p == "L" && $geo1 == "A") {
		  $akhir = "16";
		} elseif ($div_p == "L" && $geo1 == "B") {
		  $akhir = "19";
		} elseif ($div_p == "L" && $geo1 == "C") {
		  $akhir = "20";
		} elseif ($div_p == "M" && $geo1 == "A") {
		  $akhir = "18";
		} elseif ($div_p == "M" && $geo1 == "B") {
		  $akhir = "21";
		} elseif ($div_p == "M" && $geo1 == "C") {
		  $akhir = "22";
		} elseif ($div_p == "H" && $geo1 == "A") {
		  $akhir = "20";
		} elseif ($div_p == "H" && $geo1 == "B") {
		  $akhir = "23";
		} elseif ($div_p == "H" && $geo1 == "C") {
		  $akhir = "24";
		}


		    $grade_sub = ($revenue1 + $fte1 + $akhir)/3;
		    $grade_sub = floor($grade_sub);

		   }

				$data = array(
					'company_code'=>$company_code,
					'company_name'=>$company_name,
					'revenue'=>$revenue,
					'fte'=>$fte,
					'company_role'=>$company_role,
					'biz_diversity'=>$biz_diversity,
					'biz_complexity'=>$biz_complexity,
					'geo_breadth'=>$geo_breadth,
					'grade_sub'=>$grade_sub,

				);
				$this->load->model('Model_businessunit');
				$this->Model_businessunit->ubahbusiness($data,$id);

				redirect('Business_unit');
		}
		public function hapusbusiness()
		{

				 // id yang telah diparsing pada ajax form_addpersk.php data{id:id}
				 $id = $this->input->post('id');

				 $data = $this->Model_businessunit->hapusdatabusiness($id);
				 echo json_encode($data);

		}


}
