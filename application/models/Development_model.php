<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Development_model extends CI_Model
{
    public $table = 'tb_dev';
    public $id = 'tb_dev.id';
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
    public function getDev($id)
    {
        $this->db->select('SUM(bobot) as bobot');
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getSub($id)
    {
        $this->db->from('sub_dev');
		$this->db->where('id_dev', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
	public function getidd($id)
    {
        $this->db->from($this->table);
		$this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
	public function getBobot($id)
    {
        $query = 'SELECT sum(bobot) as bobot FROM `tb_dev` WHERE project_id = "'.$id.'"';
        return $this->db->query($query)->row_array();
    }
    public function getProgres($id)
    {
        $query = 'SELECT progres as progres FROM `tb_dev` WHERE project_id = "'.$id.'"';
        return $this->db->query($query)->row_array();
    }
    public function getBobot1($id)
    {
        $query = 'SELECT bobot as bobot1 FROM `tb_dev` WHERE project_id = "'.$id.'"';
        return $this->db->query($query)->row_array();
    }

    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('NIK', $this->session->userdata('NIK'));
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function getByprov()
    {
        $this->db->select('u.*,i.nama_instansi as nama_instansi,');
        $this->db->from('user u');
        $this->db->join('instansi i', 'u.id_instansi = i.id_instansi');
        $this->db->where('NIK', $this->session->userdata('NIK'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getprov()
    {
        $this->db->select('p.*,i.singkatan as singkatan,');
        $this->db->from('user p');
        $this->db->join('instansi i', 'p.id_instansi = i.id_instansi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id) 
    {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        $this->db->get_where($this->table, ["id" => $id])->row();
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
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

	public function deletekeg($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function searchRecord($key)
    {
        $this->db->select('p.*,u.nama as nama,');
        $this->db->from('tb_project p');
        $this->db->like('nama',$key);
        $this->db->or_like('project',$key);
        $this->db->or_like('newcr',$key);
        return $this->db->get()->result();
        // $query = $this->db->get();

        // if($query->num_rows()>0){
        //   return $query->result();
        
    }
    public function getProject($keyword)
    {
        if(!$keyword){
            return null;
        }
        $this->db->like('namaproject', $keyword);
        $this->db->or_like('project', $keyword);
        $this->db->or_like('status', $keyword);
        $this->db->or_like('newcr', $keyword);
        $this->db->or_like('pic', $keyword);
        $query= $this->db->get('tb_project p');
        //print_r($query->result_array());die();
        return $query->result();
        

    }

    function ubah($data, $id){
        $this->db->where('id',$id);
        $this->db->update('tb_dev', $data);
        return TRUE;
    }
    
    function hitung()
    {
        $sql = "SELECT (progrresbrd/bobotbrd*100) as persenbrd FROM tb_project";
        return $this->db->query($sql);
    }

    // function getkeg()
    // {
    //     $sql="SELECT * FROM tb_dev INNER JOIN tb_project ON tb_dev.project_id = tb_project.id_project where id_project";
    //     $query=$this->db->query($sql);
    //     return $query->result();
    //     print_r($query->result());die();
    // }
    function getkeg($id2)
    {
        $this->db->select('*');
        $this->db->from('tb_dev');
        $this->db->where('project_id',$id2);
        $this->db->order_by('last_updated', 'desc');
        return $this->db->get()->result();
    }
}
