<?php

namespace App\Models\Mahasiswa;

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
			->where('tbjadwal_mhs.nim', session()->get('username'))
			->get()
			->getResultArray();
	}
}
