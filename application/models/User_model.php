<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
    public $table = 'user';
    public $id = 'user.id_user';

    public function __construct()
    {
        parent::__construct();
    }

    public function get($keyword=null)
    {
        $this->db->select('*');
		$this->db->from('user');
		if(!empty($keyword)){
			$this->db->like('nama',$keyword);
            $this->db->or_like('role',$keyword);
		}
		return $this->db->get()->result_array();
    }

    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getById($id) 
    {
        $this->db->from($this->table);
        $this->db->where('id_user',$id);
        $query = $this->db->get();
        $this->db->get_where($this->table, ["id_user" => $id])->row();
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

    public function uplanning()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        $query = $this->db->query("SELECT * from user  where role = 'Planning' ");
        return $query->num_rows();
    }
    public function udevelopment()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        $query = $this->db->query("SELECT * from user  where role = 'Development' ");
        return $query->num_rows();
    }
    public function upinbag()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        $query = $this->db->query("SELECT * from user  where role = 'Pinbag' ");
        return $query->num_rows();
    }
    public function usupport()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        $query = $this->db->query("SELECT * from user  where role = 'IT Support' ");
        return $query->num_rows();
    }

    public function planning()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        $query = $this->db->query("SELECT * from user  where role = 'Planning' ");
        return $query->result_array();
    }
    public function development()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        $query = $this->db->query("SELECT * from user  where role = 'Development' ");
        return $query->result_array();
    }
    public function pinbag()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        $query = $this->db->query("SELECT * from user  where role = 'Pinbag' ");
        return $query->result_array();
    }
    public function support()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        $query = $this->db->query("SELECT * from user  where role = 'IT Support' ");
        return $query->result_array();
    }

    public function getRole($table)
    {
        $query = $this->db->get('user');
        return $query->row_array();
    }

    public function role()
    {
        $this->db->select('role');
        $this->db->distinct('role');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

}