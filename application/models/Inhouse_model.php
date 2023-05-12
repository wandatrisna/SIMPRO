<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Inhouse_model extends CI_Model
{
    public $table = 'inhouse';
    public $tableNomorSurat = 'nomor_surat';
    public $id = 'inhouse.id_in';

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $query = $this->db->query("SELECT * from inhouse where hapus_in=1 group by nama_in");
        return $query->result_array();
    }

    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('id_in', $this->session->userdata('id_in'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getById($id) 
    {
        $this->db->from($this->table);
        $this->db->where('id_in',$id);
        $query = $this->db->get();
        $this->db->get_where($this->table, ["id_in" => $id])->row();
        return $query->row_array();
    }

    public function getByNama($nama_in) 
    {
        $nama = str_replace("%20", " ", $nama_in);
        $query = $this->db->query("SELECT * from inhouse where nama_in = '$nama' ");
        return $query->result_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->query("UPDATE inhouse set hapus_in = '0' where id_in = $id");
        return $this->db->affected_rows();
    }

    public function nomor(){    
        $query = $this->db->get('inhouse'); 
        $total_row = $query->num_rows();
        $kode = $total_row + 1;

            $tahun = date ('Y');
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
            $kodetampil = $batas."/PMF/TSI/".$tahun;  //format kode
            return $kodetampil;  
    }
}