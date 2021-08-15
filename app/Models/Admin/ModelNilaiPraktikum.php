<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelNilaiPraktikum extends Model
{
	public function getAllData()
	{
		return $this->db->table('tblnilai')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tblnilai.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tblnilai.id_matkul')
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
			->where('id_jadwal_mhs', $data['id_jadwal_mhs'])
			->update($data);
	}
	public function deleteData($data)
	{
		return $this->db->table('tblnilai')
			->where('id_jadwal_mhs', $data['id_jadwal_mhs'])
			->delete($data);
	}
	public function getNamaMahasiswa($nim)
	{
		return $this->db->table('tblmahasiswa')
			->where('nim', $nim)
			->get()
			->getResultArray();
	}
	public function getNamaDosen($id_jadwal)
	{
		return $this->db->table('tbljadwal')
			->join('tbldosen', 'tbldosen.nidn=tbljadwal.nidn')
			->where('id_jadwal', $id_jadwal)
			->get()
			->getResultArray();
	}

	public function getNidn($id_jadwal)
	{
		return $this->db->table('tbljadwal')
			->join('tbldosen', 'tbldosen.nidn=tbljadwal.nidn')
			->where('id_jadwal', $id_jadwal)
			->get()
			->getResultArray();
	}
	public function getMatkul($id_matkul)
	{
		return $this->db->table('tbljadwal')
			->join('tblmatkul', 'tblmatkul.id_matkul=tbljadwal.id_matkul')
			->where('tbljadwal.id_matkul', $id_matkul)
			->get()
			->getResultArray();
	}
}
