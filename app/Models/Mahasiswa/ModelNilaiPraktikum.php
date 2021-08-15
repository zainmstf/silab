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

	public function insertData($data)
	{
		return $this->db->table('tblpendaftaran')
			->insert($data);
	}

	public function editData($data)
	{
		$this->db->table('tblpendaftaran')
			->where('id_pendaftaran', $data['id_pendaftaran'])
			->update($data);
	}
	public function detailData($nim)
	{
		return $this->db->table('tblpendaftaran')
			->where('nim', $nim)
			->get()
			->getRowArray();
	}
}
