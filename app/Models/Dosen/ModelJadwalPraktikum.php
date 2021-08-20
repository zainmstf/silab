<?php

namespace App\Models\Dosen;

use CodeIgniter\Model;

class ModelJadwalPraktikum extends Model
{
	public function getJadwalPraktikum()
	{
		return $this->db->table('tbjadwal_mhs')
			->join('tbljadwal', 'tbljadwal.id_jadwal=tbjadwal_mhs.id_jadwal')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tbjadwal_mhs.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tbjadwal_mhs.id_matkul')
			->join('tbldosen', 'tbldosen.nidn=tbjadwal_mhs.nidn')
			->where('tbjadwal_mhs.nidn', session()->get('username'))
			->get()
			->getResultArray();
	}
	public function getJumlahJadwalPraktikum()
	{
		return $this->db->table('tbjadwal_mhs')
			->countAllResults();
	}
	public function getJumlahMhs($id_jadwal)
	{
		return $this->db->table('tbjadwal_mhs')
			->join('tbljadwal', 'tbljadwal.id_jadwal=tbjadwal_mhs.id_jadwal')
			->where('tbjadwal_mhs.nidn', session()->get('username'))
			->where('tbljadwal.id_jadwal', $id_jadwal)
			->countAllResults();
	}
}
