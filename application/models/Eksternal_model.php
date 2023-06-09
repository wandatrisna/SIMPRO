<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Eksternal_model extends CI_Model
{
    public $table = 'eksternal';
    public $id = 'eksternal.id_eks';

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        // print_r($nomor_surat);die();
        // $nomor = (int)"$nomor_surat";
       
        $query = $this->db->query("SELECT * from eksternal where hapus_eks = 1 group by nama_eks");
        return $query->result_array();
    }

    public function getCount()
    {
        $query = $this->db->query("SELECT * from eksternal where hapus_eks=1");
        return $query->num_rows();
    }

    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('id_eks', $this->session->userdata('id_eks'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getByNama($nama_eks) 
    {
        $nama = str_replace("%20", " ", $nama_eks);
        $query = $this->db->query("SELECT * from eksternal where nama_eks = '$nama' and hapus_eks=1");
        return $query->result_array();
    }

    public function getById($id) 
    {
        $this->db->from($this->table);
        $this->db->where('id_eks',$id);
        $query = $this->db->get();
        $this->db->get_where($this->table, ["id_eks" => $id])->row();
        return $query->row_array();
       
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
        $this->db->query("UPDATE eksternal set hapus_eks = '0' where id_eks = $id");
        return $this->db->affected_rows();
    }

    public function nomorsurat($jenis_eks){    
        $query = $this->db->get('eksternal'); 
        $total_row = $query->num_rows();
        $kode = $total_row + 1;
        if($jenis_eks=='CR') {
            $tahun = date ('Y');
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
            $kodetampil = $batas."/CR-EKSTERNAL/".$tahun;  //format kode
        } else if ($jenis_eks=='PRL') {
            $tahun = date ('Y');
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
            $kodetampil = $batas."/PRL-EKSTERNAL/".$tahun;  //format kode
        } else if ($jenis_eks=='PRF') {
            $tahun = date ('Y');
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
            $kodetampil = $batas."/PRF-EKSTERNAL/".$tahun;  //format kode
        } else {
            $tahun = date ('Y');
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
            $kodetampil = $batas."/NEW-EKSTERNAL/".$tahun;  //format kode
        }
        return $kodetampil;  
    }
}