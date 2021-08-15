<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelDataDosen;
use App\Controllers\BaseController;

class DataDosen extends BaseController
{
	public function __construct()
	{
		$this->ModelDataDosen = new ModelDataDosen();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Dosen',
			'dataDosen' => $this->ModelDataDosen->getAllData(),
		];
		return view('admin/data_dosen', $data);
	}

	public function insertData()
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'nidn' => $this->request->getPost('nidn'),
				'nama_dosen' => $this->request->getPost('namadsn'),
				'pwd_dosen' => $this->request->getPost('pwd_dsn'),
				'jenis_kelamin_dsn' => $this->request->getPost('jekel'),
				'email_dsn' => $this->request->getPost('email'),
				'telp_dsn' => $this->request->getPost('telp'),
				'foto_dsn' => 'userx.jpg',
				'level' => '2'
			];
			$this->ModelDataDosen->insertData($data);
		} else {
			$nama_file = $file->getRandomName();
			$data = [
				'nidn' => $this->request->getPost('nidn'),
				'nama_dosen' => $this->request->getPost('namadsn'),
				'pwd_dosen' => $this->request->getPost('pwd_dsn'),
				'jenis_kelamin_dsn' => $this->request->getPost('jekel'),
				'email_dsn' => $this->request->getPost('email'),
				'telp_dsn' => $this->request->getPost('telp'),
				'foto_dsn' => 'userx.jpg',
				'level' => '2'
			];
			$this->ModelDataDosen->insertData($data);
			//Upload File
			$file->move('images/', $nama_file);
		}
		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to(base_url('admin/datadosen'));
	}

	public function editData($nidn)
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'nidn' => $this->request->getPost('nidn'),
				'nama_dosen' => $this->request->getPost('namadsn'),
				'pwd_dosen' => $this->request->getPost('pwd_dsn'),
				'jenis_kelamin_dsn' => $this->request->getPost('jekel'),
				'email_dsn' => $this->request->getPost('email'),
				'telp_dsn' => $this->request->getPost('telp'),
				'foto_dsn' => 'userx.jpg',
				'level' => '2'
			];
			$this->ModelDataDosen->editData($data);
		} else {
			$datamhs = $this->ModelDataDosen->detailData($nidn);
			if (($datamhs['foto_dsn'] != "userx.jpg")) {
				unlink('./images/' . $datamhs['foto_dsn']);
			}
			$nama_file = $file->getRandomName();
			$data = [
				'nidn' => $this->request->getPost('nidn'),
				'nama_dosen' => $this->request->getPost('namadsn'),
				'pwd_dosen' => $this->request->getPost('pwd_dsn'),
				'jenis_kelamin_dsn' => $this->request->getPost('jekel'),
				'email_dsn' => $this->request->getPost('email'),
				'telp_dsn' => $this->request->getPost('telp'),
				'foto_dsn' => $nama_file,
				'level' => '2'
			];
			$this->ModelDataDosen->editData($data);
			//Upload File
			$file->move('images/', $nama_file);
		}
		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('admin/datadosen'));
	}

	public function deleteData($nidn)
	{
		$datamhs = $this->ModelDataDosen->detailData($nidn);
		if (($datamhs['foto_dsn'] != "userx.jpg")) {
			unlink('./images/' . $datamhs['foto_dsn']);
		}
		$data = [
			'nidn' => $nidn
		];
		$this->ModelDataDosen->deleteData($data);
		session()->setFlashdata('delete', 'Data berhasil dihapus !!');
		return redirect()->to(base_url('admin/datadosen'));
	}
}

	//--------------------------------------------------------------------
