<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_businessunit extends CI_Model {

	public function tambahbusinessunit($data)
	{
		return $this->db->insert('business_unit', $data);
	}

	public function getdatabusiness()
    {
        $this->db->select('*');
        $this->db->from('business_unit');
        $query = $this->db->get();
        return $query->result_array();
    }

    function tampil_data() {
        $query = $this->db->get('guideceo_diversity');
        return $query;
    }

    function tampil_data1() {
        $query = $this->db->get('guideceo_complexity_parent');
        return $query;
    }

    function tampil_data2() {
        $query = $this->db->get('guideceo_geographical');
        return $query;
    }

    function tampil_data3() {
        $query = $this->db->get('guideceo_complexity_sub');
        return $query;
    }

    public function databusinessedit($id)
     {
             $this->db->select('*');
             $this->db->from('business_unit');
             $this->db->where('id',$id);
             $query = $this->db->get();
             return $query->row_array();
     }

     public function ubahbusiness($data,$id)
     {
             $this->db->where('id',$id);
             return $this->db->update('business_unit',$data);
     }
     public function hapusdatabusiness($id)
     {
             $this->db->where('id',$id);
             return $this->db->delete('business_unit');

     }

}
