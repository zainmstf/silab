<?php

namespace App\Models\Mahasiswa;

use CodeIgniter\Model;

class ModelNilaiPraktikum extends Model
{
	public function getNilaiPraktikum()
	{
		return $this->db->table('tblnilai')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tblnilai.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tblnilai.id_matkul')
			->where('tblnilai.nim', session()->get('username'))
			->get()
			->getResultArray();
	}
}
