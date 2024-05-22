<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function get_data($table)
	{
		
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function get_data_by_id($id, $table)
	{
			return $this->db->get_where($table, array('id_mahasiswa' => $id));
	}

	public function update_data($id, $data, $table)
	{
			$this->db->where('id_mahasiswa', $id);
			return $this->db->update($table, $data);
	}


	public function delete($id, $table)
	{
			$this->db->delete($table, array('id_mahasiswa' => $id)); 
			return $this->db->affected_rows(); 
	}

	
}
