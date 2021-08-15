<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelDataMatkul;
use App\Models\Admin\ModelDataDosen;
use App\Controllers\BaseController;

class DataMatkul extends BaseController
{
	public function __construct()
	{
		$this->ModelDataMatkul = new ModelDataMatkul();
		$this->ModelDataDosen = new ModelDataDosen();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Mata Kuliah',
			'datamatkul' => $this->ModelDataMatkul->getAllData(),
			'dsn' => $this->ModelDataDosen->getAllData()
		];
		// print_r($data['datamatkul']);
		return view('admin/data_matkul', $data);
	}

	public function insertData()
	{
		$data = [
			'nidn' => $this->request->getPost('nama_dsn'),
			'kode_matkul' => $this->request->getPost('kode_matkul'),
			'matkul' => $this->request->getPost('nama_matkul'),
			'prodi' => $this->request->getPost('prodi'),
			'sks' => $this->request->getPost('sks')
		];
		$this->ModelDataMatkul->insertData($data);

		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to(base_url('admin/datamatkul'));
	}

	public function editData($id_matkul)
	{
		$data = [
			'id_matkul' => $id_matkul,
			'nidn' => $this->request->getPost('nidn'),
			'kode_matkul' => $this->request->getPost('kode_matkul'),
			'matkul' => $this->request->getPost('nama_matkul'),
			'prodi' => $this->request->getPost('prodi'),
			'sks' => $this->request->getPost('sks')
		];
		$this->ModelDataMatkul->editData($data);

		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('admin/datamatkul'));
	}

	public function deleteData($id_matkul)
	{
		$data = [
			'id_matkul' => $id_matkul
		];
		$this->ModelDataMatkul->deleteData($data);
		session()->setFlashdata('delete', 'Data berhasil dihapus !!');
		return redirect()->to(base_url('admin/datamatkul'));
	}
}

	//--------------------------------------------------------------------
