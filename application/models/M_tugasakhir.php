<?php

class M_tugasakhir extends CI_Model{
    public function tampil_data($limit,$start)
    {
        $this->db->limit($limit,$start);
        return $this->db->get('ta_tbl');
    }

    public function input_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('ta_tbl');
        $this->db->like('th_angkatan', $keyword);
        $this->db->or_like('nim', $keyword);
        return $this->db->get()->result();
    }

    public function update($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('ta_tbl',$data);
    }
    
    
}