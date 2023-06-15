<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sub_model extends CI_Model
{
    public $table = 'sub_dev';
    public $id = 'sub_dev.id_sub';
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
        $this->db->where('id_dev', $id);
        $query = $this->db->get();
        return $query->result();
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
//sum sub-dev
function getSumSubDev($iddev){
    $query = $this->db->query("SELECT SUM(bobot) AS Bobot FROM sub_dev WHERE id_dev = $iddev");
    // print_r($query->result_array()); die();
    return $query->result_array();
}

function updateProgress($id, $progress){
    $this->db->query("UPDATE tb_dev SET progres = $progress WHERE id = $id");
    return $this->db->affected_rows();
}

function updateProgress2($idd, $progress2){
    $this->db->query("UPDATE tb_project SET progresdev = $progress WHERE id_project = $id");
    return $this->db->affected_rows();
}
public function getById($id)
{
    $this->db->select('SUM(bobot) as bobot');
    $this->db->from($this->table);
    $this->db->where('project_id', $id);
    $query = $this->db->get();
    return $query->result();

}

function getSumSubPro($idpro){
    $query = $this->db->query("SELECT SUM(bobot) AS Bobot FROM sub_dev WHERE project_id = $idpro");
    // print_r($query->result_array()); die();
    return $query->result_array();
}
	
}
