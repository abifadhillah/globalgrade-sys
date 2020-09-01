<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Job extends CI_Model {

	public function tambahjob($data)
	{
		return $this->db->insert('job', $data);
	}

	public function getdatajob()
    {
        $this->db->select('job.id,Job_index,Job_title,company_name,business_grade,Doc_ref,Band,func_FK,func_BE,func_LD,func_PS,func_NI,func_AI,func_IS,Grade');
        $this->db->from('job');
        $this->db->join('business_unit','business_unit.id = job.business_unit','left');
        $query = $this->db->get();
        return $query->result_array();
    }

    function getpredictiongrade($business_grade = null,$Band = null,$func_FK = null,$func_BE = null,$func_LD = null,$func_PS = null,$func_NI = null,$func_AI = null,$func_IS = null)
    {
        $this->db->select('*');
        $this->db->from('prediction_job');
        $this->db->where('business_grade',$business_grade);
        $this->db->where('band',$Band);
        $this->db->where('ggs_kn',$func_FK);
        $this->db->where('ggs_be',$func_BE);
        $this->db->where('ggs_ls',$func_LD);
        $this->db->where('ggs_ps',$func_PS);
        $this->db->where('ggs_ni',$func_NI);
        $this->db->where('ggs_ai',$func_AI);
        $this->db->where('ggs_is',$func_IS);
         $query = $this->db->get();
         return $query->row();
       
    }

    public function getbusinessunit()
    {
        $this->db->select('*');
        $this->db->from('business_unit');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_grade($id) {
        $this->db->select('grade_sub');
        $this->db->from('business_unit');
        $this->db->where('id',$id);
        return $this->db->get()->row();
    }

    public function get_gradejob($business_unit) {
        $this->db->select('*');
        $this->db->from('business_unit');
        $this->db->where('id',$business_unit);
        $query = $this->db->get();
        return $query->row();
    }


    public function datajobedit($id)
     {
             $this->db->select('job.id,Job_index,Job_title,company_name,business_grade,Doc_ref,Band,func_FK,func_BE,func_LD,func_PS,func_NI,func_AI,func_IS,Grade');
             $this->db->from('job');
             $this->db->join('business_unit','business_unit.id = job.business_unit','left');
             $this->db->where('job.id',$id);
             $query = $this->db->get();
             return $query->row_array();
     }

     public function datajobedit2($id)
     {
             $this->db->select('*');
             $this->db->from('job');
             $this->db->where('id',$id);
             $query = $this->db->get();
             return $query->row_array();
     }

     public function ubahjob($data,$id)
     {
             $this->db->where('id',$id);
             return $this->db->update('job',$data);
     }
     public function hapusdatajob($id)
     {
             $this->db->where('id',$id);
             return $this->db->delete('job');

     }

}
