<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Akun extends CI_Model {
	public function view(){
		return $this->db->get('user')->result();
	}

	public function getdataakun()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result_array();
    }

     public function inputakun($data)
    {
        return $this->db->insert('user', $data);
    }

    public function dataakunedit($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function ubahakun($data,$id)
    {
        $this->db->where('id',$id);
        return $this->db->update('user',$data);
    }

    public function hapusdataakun($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('user');

    }

}
