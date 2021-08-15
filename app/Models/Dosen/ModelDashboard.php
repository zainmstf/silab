<?php

namespace App\Models\Dosen;

use CodeIgniter\Model;

class ModelDashboard extends Model
{
	public function getDataDosen()
	{
		return $this->db->table('tbldosen')
			->where('nidn', session()->get('username'))
			->get()
			->getRowArray();
	}

	public function editData($data)
	{
		$this->db->table('tbldosen')
			->where('nidn', $data['nidn'])
			->update($data);
	}
}
