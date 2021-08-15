<?php

namespace App\Controllers\Dosen;

use App\Models\Dosen\ModelDashboard;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function __construct()
	{
		$this->ModelDashboard = new ModelDashboard();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Dosen',
			'datadsn' => $this->ModelDashboard->getDataDosen()
		];
		return view('dosen/dashboard', $data);
	}

	public function editData($nidn)
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'nidn' => $nidn,
				'nama_dosen' => $this->request->getPost('namadsn'),
				'pwd_dosen' => $this->request->getPost('pwd_dsn'),
				'jenis_kelamin_dsn' => $this->request->getPost('jekel'),
				'email_dsn' => $this->request->getPost('email'),
				'telp_dsn' => $this->request->getPost('telp')
			];
			$this->ModelDashboard->editData($data);
		} else {
			$datadsn = $this->ModelDashboard->detailData($nidn);
			if (($datadsn['foto_dsn'] != "userx.jpg")) {
				unlink('./images/' . $datadsn['foto_dsn']);
			}
			$nama_file = $file->getRandomName();
			$data = [
				'nidn' => $nidn,
				'nama_dosen' => $this->request->getPost('namadsn'),
				'pwd_dosen' => $this->request->getPost('pwd_dsn'),
				'jenis_kelamin_dsn' => $this->request->getPost('jekel'),
				'email_dsn' => $this->request->getPost('email'),
				'telp_dsn' => $this->request->getPost('telp'),
				'foto_dsn' => $nama_file
			];
			$this->ModelDashboard->editData($data);
			//Upload File
			$file->move('images/', $nama_file);
		}
		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('dosen/dashboard'));
	}
}

	//--------------------------------------------------------------------
