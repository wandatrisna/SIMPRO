<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jenisaplikasi_model extends CI_Model
{
    public $table = 'jenisaplikasi';
    public $id = 'jenisaplikasi.id_jenisaplikasi';
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id) 
    {
        $this->db->from($this->table);
        $this->db->where('id_jenisaplikasi',$id);
        $query = $this->db->get();
        $this->db->get_where($this->table, ["jenisaplikasi" => $id])->row();
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
        // Menggunakan transaksi untuk memastikan integritas data
        $this->db->trans_start();
    
        // Coba hapus data
        $this->db->where('id_jenisaplikasi', $id);
        $this->db->delete('jenisaplikasi');
    
        $this->db->trans_complete();
    
        if ($this->db->trans_status() === FALSE) {
            throw new Exception('Gagal menghapus data karena terkait dengan data lain!');
        }
    }
    

}
?>