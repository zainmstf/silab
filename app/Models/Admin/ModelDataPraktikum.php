<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelDataPraktikum extends Model
{
	public function getAllData()
	{
		return $this->db->table('tbljadwal')
			->join('tbldosen', 'tbldosen.nidn=tbljadwal.nidn')
			->join('tblmatkul', 'tblmatkul.id_matkul=tbljadwal.id_matkul')
			->orderBy('id_jadwal', 'ASC')
			->get()
			->getResultArray();
	}
	public function insertData($data)
	{
		return $this->db->table('tbljadwal')
			->insert($data);
	}
	public function editData($data)
	{
		return $this->db->table('tbljadwal')
			->where('id_jadwal', $data['id_jadwal'])
			->update($data);
	}
	public function deleteData($data)
	{
		return $this->db->table('tbljadwal')
			->where('id_jadwal', $data['id_jadwal'])
			->delete($data);
	}
	public function detailData($id_jadwal)
	{
		return $this->db->table('tbljadwal')
			->where('id_jadwal', $id_jadwal)
			->get()
			->getRowArray();
	}
}
