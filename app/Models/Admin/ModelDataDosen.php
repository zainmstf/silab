<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelDataDosen extends Model
{
	public function getAllData()
	{
		return $this->db->table('tbldosen')
			->orderBy('nidn', 'ASC')
			->get()
			->getResultArray();
	}
	public function insertData($data)
	{
		$this->db->table('tbldosen')
			->insert($data);
	}
	public function editData($data)
	{
		$this->db->table('tbldosen')
			->where('nidn', $data['nidn'])
			->update($data);
	}
	public function deleteData($data)
	{
		$this->db->table('tbldosen')
			->where('nidn', $data['nidn'])
			->delete($data);
	}
	public function detailData($nidn)
	{
		return $this->db->table('tbldosen')
			->where('nidn', $nidn)
			->get()
			->getRowArray();
	}
}
