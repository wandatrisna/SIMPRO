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

	
}
