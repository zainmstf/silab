<?php

namespace App\Controllers\Mahasiswa;

use App\Models\ModelDataMahasiswa;
use CodeIgniter\Controller;

class DataMahasiswa extends Controller
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
			'foto_mhs' => $nama_file
		];
		// UploadedFile
		$file->move('public/images/', $nama_file);
		$this->ModelDataMahasiswa->insertData($data);
		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to('/datamahasiswa');
	}

	public function editData($nim)
	{
		$file = $this->request->getFile('foto');
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
		//Upload File
		$file->move('public/images/', $nama_file);
		$this->ModelDataMahasiswa->editData($data);
		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to('admin/datamahasiswa');
	}

	public function deleteData($nim)
	{
		$data = [
			'nim' => $nim

		];
		$this->ModelDataMahasiswa->deleteData($data);
		session()->setFlashdata('delete', 'Data berhasil dihapus !!');
		return redirect()->to('/datamahasiswa');
	}
}

	//--------------------------------------------------------------------
