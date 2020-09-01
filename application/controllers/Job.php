<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}
   		$this->load->model('Model_Job');
	}


	public function index(){
		$this->load->view('Job/View_job');
		$data['business_unit'] = $this->Model_Job->getbusinessunit();
		$this->load->view('Job/Form_addjob',$data);

	}

	public function Datajob()
    {

        $Datajob = $this->Model_Job->getdatajob();
        $no =1;
        foreach ($Datajob as  $value) {
            $tbody = array();
            $tbody[] = $no++;
            $tbody[] = $value['Job_index'];
            $tbody[] = $value['Job_title'];
            $tbody[] = $value['company_name'];
            $tbody[] = $value['business_grade'];
            $tbody[] = $value['Doc_ref'];
            $tbody[] = $value['Band'];
            // $tbody[] = $value['func_FK'];
            // $tbody[] = $value['func_BE'];
            // $tbody[] = $value['func_LD'];
            // $tbody[] = $value['func_PS'];
            // $tbody[] = $value['func_NI'];
            // $tbody[] = $value['func_AI'];
            // $tbody[] = $value['func_IS'];
            $tbody[] = $value['Grade'];
			$band = "<button class='btn btn-block btn-primary btn-flat hitung-band' data-toggle='modal' data-id=".$value['id'].">Hitung Band</button>";
			$tbody[] = $band;

			$grade1 =  "<button disabled class='btn btn-block btn-danger btn-flat hitung-grade' data-toggle='modal' data-id=".$value['id'].">Hitung Grade</button>";
			$grade2 =  "<button class='btn btn-block btn-primary btn-flat hitung-grade' data-toggle='modal' data-id=".$value['id'].">Hitung Grade</button>"; 

			if($value['Band'] == null || $value['Grade'] == 'CEO'){ 
			$tbody[] = $grade1;
			}
			else {
				$tbody[] = $grade2;
			}

           	$aksi1= "<button disabled class='btn fas fa-edit btn-danger btn-flat  ubah-job' data-toggle='modal' data-id=".$value['id']."></button>".' '."<button class='btn fas fa-trash-alt btn-danger btn-flat hapus-job' id='id' data-toggle='modal' data-id=".$value['id']."></button>";

           	$aksi2= "<button class='btn fas fa-edit btn-primary btn-flat  ubah-job' data-toggle='modal' data-id=".$value['id']."></button>".' '."<button class='btn fas fa-trash-alt btn-danger btn-flat hapus-job' id='id' data-toggle='modal' data-id=".$value['id']."></button>";

           	if($value['Band'] == null && $value['Grade'] == null){
            $tbody[] = $aksi2;
        	}
        	else
        	{
        		$tbody[] = $aksi1;
        	}



            $data[] = $tbody;
        }
        if ($Datajob) {
            echo json_encode(array('data'=> $data));
        }else{
            echo json_encode(array('data'=>0));
        }
    }

		public function tambahjob(){
			$Job_index = $this->input->post('Job_index');
			$this->db->select('Job_index');
			$this->db->where('Job_index',$Job_index);
			$query = $this->db->get('job');
			$num = $query->num_rows();
			if ($num > 0)
			{
				echo '<script>alert("Duplicate Data Entry, Please Input Different Value");document.location="index" </script>';
				
			}
			else {
			$Job_title = $this->input->post('Job_title');
			$this->db->select('Job_title');
			$this->db->where('Job_title',$Job_title);
			$query = $this->db->get('job');
			$num = $query->num_rows();
			if ($num > 0)
			{
				echo '<script>alert("Duplicate Data Entry, Please Input Different Value");document.location="index" </script>';
				
			}
			else{
			$business_unit = $this->input->post('business_unit');
			$business_grade = $this->input->post('business_grade');
			$Doc_ref = $this->input->post('Doc_ref');
			$Band = $this->input->post('Band');

			$item = array(
				'Job_index'=>$Job_index,
				'Job_title'=>$Job_title,
				'business_unit'=>$business_unit,
				'business_grade'=>$business_grade,
				'Doc_ref'=>$Doc_ref,
				'Band'=>$Band
				);

			$data = $this->Model_Job->tambahjob($item);
			echo '<script>alert("Data Berhasil Direkam"); document.location="index"</script>';
		}
	}
}

		public function get_grade($id) {
		$result = $this->Model_Job->get_grade($id);
		if ($result) {
			echo json_encode($result);
		}
		}

		public function get_gradejob($id) {
		$result = $this->Model_Job->get_gradejob($id);
		if ($result) {
			echo json_encode($result);
		}
		}


		public function hitungband(){
				$id = $this->input->post('id');
				$data['datajob'] = $this->Model_Job->datajobedit($id);
				$this->load->view('Job/Form_hitungband',$data);
		}
		public function hitunggrade(){
				$id = $this->input->post('id');
				$data['datajob'] = $this->Model_Job->datajobedit($id);
				$this->load->view('Job/Form_hitunggrade',$data);
		}

		public function ubah()
		{
			$Job_index = $this->input->post('Job_index');
			$Job_title = $this->input->post('Job_title');
			$business_unit =  $this->input->post('business_unit');
			$Doc_ref = $this->input->post('Doc_ref');
			$Databusiness= $this->Model_Job->get_gradejob($business_unit);
			$grade = $Databusiness->grade_sub;

		$data = array(
			'Job_index'=> $Job_index,
			'Job_title'=> $Job_title,
			'business_unit' => $business_unit ,
			'business_grade'=> $grade,
			'Doc_ref'=> $Doc_ref ,

		);
		$id = $this->input->post('id');
		$this->Model_Job->ubahjob($data,$id);
		redirect('Job');
		
		}

		public function formedit(){
				$id = $this->input->post('id');
				$data['datajob'] = $this->Model_Job->datajobedit2($id);
				$data['business_unit'] = $this->Model_Job->getbusinessunit();	
				$this->load->view('Job/Form_editjob',$data);

		}

		public function band()
		{	
			$id = $this->input->post('idjob');
			$band =  $this->input->post('Band');
			$func_FK = null ;
			$func_BE = null ;
			$func_LD = null ;
			$func_PS = null ;
			$func_NI = null ;
			$func_AI = null ;
			$func_IS = null ;

			if($band == "6") {
				$grade = "CEO";
			}
			else if($band =="") {
				$grade = null ;
				$func_FK = null ;
				$func_BE = null ;
				$func_LD = null ;
				$func_PS = null ;
				$func_NI = null ;
				$func_AI = null ;
				$func_IS = null ;

			}
			else {
				$grade= null ;
			}

		$data = array(
			'Band'=> $band,
			'Grade'=> $grade,
			'func_FK'=> $func_FK,
			'func_BE'=> $func_BE,
			'func_LD'=> $func_LD,
			'func_PS'=> $func_PS,
			'func_NI'=> $func_NI,
			'func_AI'=> $func_AI,
			'func_IS'=> $func_IS,


		);
		
		$this->Model_Job->ubahjob($data,$id);
		redirect('Job');
		
		}

		public function grade(){
			
			$id = $this->input->post('id');
			$business_grade = $this->input->post('business_grade');
			$Band = $this->input->post('Band');
			$func_FK = $this->input->post('func_FK');
			$func_BE = $this->input->post('func_BE');
			$func_LD = $this->input->post('func_LD');
			$func_PS = $this->input->post('func_PS');
			$func_NI = $this->input->post('func_NI');
			$func_AI = $this->input->post('func_AI');
			$func_IS = $this->input->post('func_IS');

			$Datagrade = $this->Model_Job->getpredictiongrade($business_grade,$Band,$func_FK,$func_BE,$func_LD,$func_PS,$func_NI,$func_AI,$func_IS);
			$grade = $Datagrade->grade;

				$data = array(
					'business_grade'=>$business_grade,
					'Band'=>$Band,
					'func_FK'=>$func_FK,
					'func_BE'=>$func_BE,
					'func_LD'=>$func_LD,
					'func_PS'=>$func_PS,
					'func_NI'=>$func_NI,
					'func_AI'=>$func_AI,
					'func_IS'=>$func_IS,
					'Grade'=>$grade,

				);
				
				$this->Model_Job->ubahjob($data,$id);
				redirect('Job');
		}

		public function hapusjob()
		{

				 // id yang telah diparsing pada ajax form_addpersk.php data{id:id}
				 $id = $this->input->post('id');

				 $data = $this->Model_Job->hapusdatajob($id);
				 echo json_encode($data);

		}


}
