<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelDataPraktikum;
use App\Models\Admin\ModelDataDosen;
use App\Models\Admin\ModelDataMatkul;
use App\Controllers\BaseController;

class DataPraktikum extends BaseController
{
	public function __construct()
	{
		$this->ModelDataPraktikum = new ModelDataPraktikum();
		$this->ModelDataDosen = new ModelDataDosen();
		$this->ModelDataMatkul = new ModelDataMatkul();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Praktikum',
			'datapraktikum' => $this->ModelDataPraktikum->getAllData(),
			'dsn' => $this->ModelDataDosen->getAllData(),
			'matkul' => $this->ModelDataMatkul->getAllData()
		];
		// print_r($data['datapraktikum']);
		return view('admin/data_praktikum', $data);
	}

	public function insertData()
	{
		$data = [
			'nidn' => $this->request->getPost('nidn'),
			'id_matkul' => $this->request->getPost('id_matkul'),
			'prodi' => $this->request->getPost('prodi'),
			'tahun' => $this->request->getPost('tahun'),
			'kelompok' => $this->request->getPost('kelompok'),
			'ruang' => $this->request->getPost('ruang'),
			'tgl_pelak' => $this->request->getPost('tgl_pelak')
		];
		$this->ModelDataPraktikum->insertData($data);

		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to(base_url('admin/datapraktikum'));
	}

	public function editData($id_jadwal)
	{
		$data = [
			'id_jadwal' => $id_jadwal,
			'nidn' => $this->request->getPost('nidn'),
			'id_matkul' => $this->request->getPost('id_matkul'),
			'prodi' => $this->request->getPost('prodi'),
			'tahun' => $this->request->getPost('tahun'),
			'kelompok' => $this->request->getPost('kelompok'),
			'ruang' => $this->request->getPost('ruang'),
			'tgl_pelak' => $this->request->getPost('tgl_pelak')
		];
		$this->ModelDataPraktikum->editData($data);

		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('admin/datapraktikum'));
	}

	public function deleteData($id_jadwal)
	{
		$datajadwal = $this->ModelDataPraktikum->detailData($id_jadwal);

		$data = [
			'id_jadwal' => $id_jadwal
		];
		$this->ModelDataPraktikum->deleteData($data);
		session()->setFlashdata('delete', 'Data berhasil dihapus !!');
		return redirect()->to(base_url('admin/datapraktikum'));
	}
}

	//--------------------------------------------------------------------
