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

	public function get($keyword = null)
	{
		$this->db->select('*');
		$this->db->from('user');
		if (!empty($keyword)) {
			$this->db->like('nama', $keyword);
			$this->db->or_like('role', $keyword);
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
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		$this->db->get_where($this->table, ["id_user" => $id])->row();
		return $query->row_array();
	}

	public function getUserNameByNIK($nik) {
        $this->db->select('nama'); // Ganti 'name' dengan nama kolom yang sesuai
        $this->db->from('user');
        $this->db->where('NIK', $nik);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->nama; // Ganti 'name' dengan nama kolom yang sesuai
        } else {
            return null;
        }
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

	public function count_user()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		$query = $this->db->query("SELECT * from user where NOT role = 'Superuser'");
		return $query->num_rows();
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
		$query = $this->db->query("SELECT * from user  where role = 'Support' ");
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
		$query = $this->db->query("SELECT * from user  where role = 'Support' ");
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


	public function dashboard()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		$query1 = $this->db->query("SELECT nama, gambar FROM user ORDER BY RAND() LIMIT 5");
		return $query->result_array();
	}
	public function Paplikasi()
	{
		return $this->db->count_all('jenisaplikasi');

	}
	public function Pdokumen()
	{
		return $this->db->count_all('jenisdokumen');

	}
	public function Pproject()
	{
		return $this->db->count_all('jenisproject');

	}
	public function Peks()
	{
		return $this->db->count_all('jenis_eks');

	}
	public function Pdivisi()
	{
		return $this->db->count_all('divisi');

	}
	public function inhouse()
	{
		return $this->db->count_all('inhouse');

	}
	public function eksternal()
	{
		return $this->db->count_all('eksternal');

	}
}
