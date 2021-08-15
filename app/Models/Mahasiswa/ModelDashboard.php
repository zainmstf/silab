<?php

namespace App\Models\Mahasiswa;

use CodeIgniter\Model;

class ModelDashboard extends Model
{
	public function getDataMahasiswa()
	{
		return $this->db->table('tblmahasiswa')
			->where('nim', session()->get('username'))
			->get()
			->getRowArray();
	}

	public function editData($data)
	{
		$this->db->table('tblmahasiswa')
			->where('nim', $data['nim'])
			->update($data);
	}
}
