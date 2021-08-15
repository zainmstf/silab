<?php

namespace App\Models\Dosen;

use CodeIgniter\Model;

class ModelNilaiPraktikum extends Model
{
	public function getAllData()
	{
		return $this->db->table('tblnilai')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tblnilai.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tblnilai.id_matkul')
			->where('tblnilai.nidn', session()->get('username'))
			->orderBy('id_nilai', 'ASC')
			->get()
			->getResultArray();
	}
	public function insertData($data)
	{
		return $this->db->table('tblnilai')
			->insert($data);
	}
	public function editData($data)
	{
		return $this->db->table('tblnilai')
			->where('id_nilai', $data['id_nilai'])
			->update($data);
	}
	public function deleteData($data)
	{
		return $this->db->table('tblnilai')
			->where('id_nilai', $data['id_nilai'])
			->delete($data);
	}
	public function detailData($id_jadwal)
	{
		return $this->db->table('tbljadwal')
			->where('id_jadwal', $id_jadwal)
			->get()
			->getRowArray();
	}
	public function getMahasiswa($nim)
	{
		return $this->db->table('tblmahasiswa')
			->where('nim', $nim)
			->get()
			->getResultArray();
	}
}
