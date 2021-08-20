<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelDataPengumuman extends Model
{
	public function getAllData()
	{
		return $this->db->table('tbpengumuman')
			->orderBy('id_pengumuman', 'ASC')
			->get()
			->getResultArray();
	}
	public function insertData($data)
	{
		return $this->db->table('tbpengumuman')
			->insert($data);
	}
	public function editData($data)
	{
		return $this->db->table('tbpengumuman')
			->where('id_pengumuman', $data['id_pengumuman'])
			->update($data);
	}
	public function deleteData($data)
	{
		return $this->db->table('tbpengumuman')
			->where('id_pengumuman', $data['id_pengumuman'])
			->delete($data);
	}
	public function getDataPengumuman()
	{
		return $this->db->table('tbpengumuman')
			->orderBy('id_pengumuman', 'DESC')
			->get(0, 2)
			->getResultArray();
	}
}
