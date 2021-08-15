<?php

namespace App\Controllers\Mahasiswa;

use App\Models\Mahasiswa\ModelDashboard;
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
			'title' => 'Data Mahasiswa',
			'datamhs' => $this->ModelDashboard->getDataMahasiswa()
		];
		// print_r($data['datamhs']);
		return view('mahasiswa/dashboard', $data);
	}

	public function editData($nim)
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'nim' => $nim,
				'nama_mhs' => $this->request->getPost('namamhs'),
				'pwd_mhs' => $this->request->getPost('pwd_mhs'),
				'jenis_kelamin_mhs' => $this->request->getPost('jekel'),
				'prodi' => $this->request->getPost('prodi'),
				'semester' => $this->request->getPost('semester'),
				'kelas' => $this->request->getPost('kelas'),
				'email_mhs' => $this->request->getPost('email'),
				'telp_mhs' => $this->request->getPost('telp')
			];
			$this->ModelDashboard->editData($data);
		} else {
			$datamhs = $this->ModelDashboard->detailData($nim);
			if (($datamhs['foto_mhs'] != "userx.jpg")) {
				unlink('./images/' . $datamhs['foto_mhs']);
			}
			$nama_file = $file->getRandomName();
			$data = [
				'nim' => $nim,
				'nama_mhs' => $this->request->getPost('namamhs'),
				'pwd_mhs' => $this->request->getPost('pwd_mhs'),
				'jenis_kelamin_mhs' => $this->request->getPost('jekel'),
				'prodi' => $this->request->getPost('prodi'),
				'semester' => $this->request->getPost('semester'),
				'kelas' => $this->request->getPost('kelas'),
				'email_mhs' => $this->request->getPost('email'),
				'telp_mhs' => $this->request->getPost('telp'),
				'foto_mhs' => $nama_file
			];
			$this->ModelDashboard->editData($data);
			//Upload File
			$file->move('images/', $nama_file);
		}
		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('mahasiswa/dashboard'));
	}
}

	//--------------------------------------------------------------------
