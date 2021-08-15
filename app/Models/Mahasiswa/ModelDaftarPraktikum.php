<?php

namespace App\Models\Mahasiswa;

use CodeIgniter\Model;

class ModelDaftarPraktikum extends Model
{
	public function getDataPraktikum()
	{
		return $this->db->table('tblpendaftaran')
			->join('tblmatkul', 'tblmatkul.id_matkul=tblpendaftaran.id_matkul')
			->where('nim', session()->get('username'))
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
