<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
	public function login_user($username, $password)
	{
		return $this->db->table('tbladmin')
			->where(
				[
					'username' => $username,
					'pwd_admin' => $password
				]
			)->get()->getRowArray();
	}
	public function login_mhs($username, $password)
	{
		return $this->db->table('tblmahasiswa')
			->where(
				[
					'nim' => $username,
					'pwd_mhs' => $password
				]
			)->get()->getRowArray();
	}
	public function login_dsn($username, $password)
	{
		return $this->db->table('tbldosen')
			->where(
				[
					'nidn' => $username,
					'pwd_dosen' => $password
				]
			)->get()->getRowArray();
	}
}
