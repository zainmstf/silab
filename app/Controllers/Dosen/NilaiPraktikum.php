<?php

namespace App\Controllers\Dosen;

use App\Models\Dosen\ModelNilaiPraktikum;
use App\Models\Admin\ModelDataMahasiswa;
use App\Models\Admin\ModelDataMatkul;
use App\Controllers\BaseController;

class NilaiPraktikum extends BaseController
{
	public function __construct()
	{
		$this->ModelNilaiPraktikum = new ModelNilaiPraktikum();
		$this->ModelDataMahasiswa = new ModelDataMahasiswa();
		$this->ModelDataMatkul = new ModelDataMatkul();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Nilai Praktikum',
			'nilai' => $this->ModelNilaiPraktikum->getAllData(),
			'mhs' => $this->ModelDataMahasiswa->getAllData(),
			'matkul' => $this->ModelDataMatkul->getAllData(),
		];
		// print_r($data['nilai']);
		return view('dosen/nilai_praktikum', $data);
	}
	public function insertData()
	{
		$data = [
			'nidn' => session()->get('username'),
			'nim' => $this->request->getPost('nim'),
			'id_matkul' => $this->request->getPost('id_matkul'),
			'prodi' => $this->request->getPost('prodi'),
			'nilai' => $this->request->getPost('nilai'),
			'grade' => $this->request->getPost('grade'),
			'keterangan' => $this->request->getPost('keterangan'),
		];
		$this->ModelNilaiPraktikum->insertData($data);

		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to(base_url('dosen/nilaipraktikum'));
	}

	public function editData($id_nilai)
	{
		$data = [
			'id_nilai' => $id_nilai,
			'id_matkul' => $this->request->getPost('id_matkul'),
			'prodi' => $this->request->getPost('prodi'),
			'nilai' => $this->request->getPost('nilai'),
			'grade' => $this->request->getPost('grade'),
			'keterangan' => $this->request->getPost('keterangan'),
		];
		$this->ModelNilaiPraktikum->editData($data);

		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('dosen/nilaipraktikum'));
	}

	public function deleteData($id_nilai)
	{
		$data = [
			'id_nilai' => $id_nilai
		];
		$this->ModelNilaiPraktikum->deleteData($data);
		session()->setFlashdata('delete', 'Data berhasil dihapus !!');
		return redirect()->to(base_url('dosen/nilaipraktikum'));
	}

	public function dataMahasiswa($nim)
	{
		$data = $this->ModelNilaiPraktikum->getMahasiswa($nim);
		foreach ($data as $key => $value) {
			echo '<input type="text" name="nama_mhs" class="form-control" value="' . $value['nama_mhs'] . '" readonly>
			';
		}
	}
	public function dataSemesterMhs($nim)
	{
		$data = $this->ModelNilaiPraktikum->getMahasiswa($nim);
		foreach ($data as $key => $value) {
			echo '<input type="text" name="nama_mhs" class="form-control" value="' . $value['semester'] . '" readonly>
			';
		}
	}
}

	//--------------------------------------------------------------------
