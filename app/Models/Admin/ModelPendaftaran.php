<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelPendaftaran extends Model
{
	public function getAllData()
	{
		return $this->db->table('tblpendaftaran')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tblpendaftaran.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tblpendaftaran.id_matkul')
			->orderBy('id_pendaftaran', 'ASC')
			->get()
			->getResultArray();
	}
	public function editData($data)
	{
		return $this->db->table('tblpendaftaran')
			->where('id_pendaftaran', $data['id_pendaftaran'])
			->update($data);
	}
}
