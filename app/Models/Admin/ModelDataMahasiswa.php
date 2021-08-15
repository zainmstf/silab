<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelDataMahasiswa extends Model
{
	public function getAllData()
	{
		return $this->db->table('tblmahasiswa')
			->orderBy('nim', 'ASC')
			->get()
			->getResultArray();
	}
	public function insertData($data)
	{
		$this->db->table('tblmahasiswa')
			->insert($data);
	}
	public function editData($data)
	{
		$this->db->table('tblmahasiswa')
			->where('nim', $data['nim'])
			->update($data);
	}
	public function deleteData($data)
	{
		$this->db->table('tblmahasiswa')
			->where('nim', $data['nim'])
			->delete($data);
	}
	public function detailData($nim)
	{
		return $this->db->table('tblmahasiswa')
			->where('nim', $nim)
			->get()
			->getRowArray();
	}
}
