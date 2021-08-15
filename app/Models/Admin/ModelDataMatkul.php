<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelDataMatkul extends Model
{
	public function getAllData()
	{
		return $this->db->table('tblmatkul')
			->join('tbldosen', 'tbldosen.nidn=tblmatkul.nidn')
			->orderBy('id_matkul', 'ASC')
			->get()
			->getResultArray();
	}
	public function insertData($data)
	{
		return $this->db->table('tblmatkul')
			->insert($data);
	}
	public function editData($data)
	{
		return $this->db->table('tblmatkul')
			->where('id_matkul', $data['id_matkul'])
			->update($data);
	}
	public function deleteData($data)
	{
		return $this->db->table('tblmatkul')
			->where('id_matkul', $data['id_matkul'])
			->delete($data);
	}
}
