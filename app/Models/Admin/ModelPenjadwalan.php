<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelPenjadwalan extends Model
{
	public function getAllData()
	{
		return $this->db->table('tbjadwal_mhs')
			->join('tbljadwal', 'tbljadwal.id_jadwal=tbjadwal_mhs.id_jadwal')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tbjadwal_mhs.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tbjadwal_mhs.id_matkul')
			->join('tbldosen', 'tbldosen.nidn=tbjadwal_mhs.nidn')
			->orderBy('id_jadwal_mhs', 'ASC')
			->get()
			->getResultArray();
	}

	public function insertData($data)
	{
		return $this->db->table('tbjadwal_mhs')
			->insert($data);
	}

	public function editData($data)
	{
		return $this->db->table('tbjadwal_mhs')
			->where('id_jadwal_mhs', $data['id_jadwal_mhs'])
			->update($data);
	}
	public function deleteData($data)
	{
		return $this->db->table('tbjadwal_mhs')
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
	public function getJadwalMhs()
	{
		return $this->db->table('tbjadwal_mhs')
			->join('tbljadwal', 'tbljadwal.id_jadwal=tbjadwal_mhs.id_jadwal')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tbjadwal_mhs.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tbjadwal_mhs.id_matkul')
			->join('tbldosen', 'tbldosen.nidn=tbjadwal_mhs.nidn')
			->orderBy('tgl_pelak', 'ASC')
			->where('tbjadwal_mhs.nim', session()->get('username'))
			->get()
			->getResultArray();
	}

	public function getJadwalDsn()
	{
		return $this->db->table('tbjadwal_mhs')
			->join('tbljadwal', 'tbljadwal.id_jadwal=tbjadwal_mhs.id_jadwal')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tbjadwal_mhs.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tbjadwal_mhs.id_matkul')
			->join('tbldosen', 'tbldosen.nidn=tbjadwal_mhs.nidn')
			->orderBy('tgl_pelak', 'ASC')
			->where('tbjadwal_mhs.nidn', session()->get('username'))
			->get()
			->getResultArray();
	}
}
