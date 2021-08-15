<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelDataMahasiswa;
use App\Controllers\BaseController;

class DataMahasiswa extends BaseController
{
	public function __construct()
	{
		$this->ModelDataMahasiswa = new ModelDataMahasiswa();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Mahasiswa',
			'datamahasiswa' => $this->ModelDataMahasiswa->getAllData(),
		];
		return view('admin/data_mahasiswa', $data);
	}

	public function insertData()
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'nim' => $this->request->getPost('nim'),
				'nama_mhs' => $this->request->getPost('namamhs'),
				'pwd_mhs' => $this->request->getPost('pwd_mhs'),
				'jenis_kelamin_mhs' => $this->request->getPost('jekel'),
				'prodi' => $this->request->getPost('prodi'),
				'semester' => $this->request->getPost('semester'),
				'kelas' => $this->request->getPost('kelas'),
				'email_mhs' => $this->request->getPost('email'),
				'telp_mhs' => $this->request->getPost('telp'),
				'foto_mhs' => 'userx.jpg',
				'level' => '1'
			];
			$this->ModelDataMahasiswa->insertData($data);
		} else {
			$nama_file = $file->getRandomName();
			$data = [
				'nim' => $this->request->getPost('nim'),
				'nama_mhs' => $this->request->getPost('namamhs'),
				'pwd_mhs' => $this->request->getPost('pwd_mhs'),
				'jenis_kelamin_mhs' => $this->request->getPost('jekel'),
				'prodi' => $this->request->getPost('prodi'),
				'semester' => $this->request->getPost('semester'),
				'kelas' => $this->request->getPost('kelas'),
				'email_mhs' => $this->request->getPost('email'),
				'telp_mhs' => $this->request->getPost('telp'),
				'foto_mhs' => $nama_file,
				'level' => '1'
			];
			$this->ModelDataMahasiswa->insertData($data);
			//Upload File
			$file->move('images/', $nama_file);
		}
		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to(base_url('admin/datamahasiswa'));
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
			$this->ModelDataMahasiswa->editData($data);
		} else {
			$datamhs = $this->ModelDataMahasiswa->detailData($nim);
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
			$this->ModelDataMahasiswa->editData($data);
			//Upload File
			$file->move('images/', $nama_file);
		}
		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('admin/datamahasiswa'));
	}

	public function deleteData($nim)
	{
		$datamhs = $this->ModelDataMahasiswa->detailData($nim);
		if (($datamhs['foto_mhs'] != "userx.jpg")) {
			unlink('./images/' . $datamhs['foto_mhs']);
		}
		$data = [
			'nim' => $nim
		];
		$this->ModelDataMahasiswa->deleteData($data);
		session()->setFlashdata('delete', 'Data berhasil dihapus !!');
		return redirect()->to(base_url('admin/datamahasiswa'));
	}
}

	//--------------------------------------------------------------------
