<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelDataPengumuman;
use App\Controllers\BaseController;

class DataPengumuman extends BaseController
{
	public function __construct()
	{
		$this->ModelDataPengumuman = new ModelDataPengumuman();
		// $this->ModelDataDosen = new ModelDataDosen();
		// $this->ModelDataMatkul = new ModelDataMatkul();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Pengumuman',
			'datapengumuman' => $this->ModelDataPengumuman->getAllData(),
		];
		return view('admin/data_pengumuman', $data);
	}

	public function insertData()
	{
		$data = [
			'judul' => $this->request->getPost('judul'),
			'isi' => $this->request->getPost('isi'),
			'tanggal' => $this->request->getPost('tanggal'),
			'waktu' => $this->request->getPost('waktu'),
			'penulis' => $this->request->getPost('penulis'),
		];
		$this->ModelDataPengumuman->insertData($data);

		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to(base_url('admin/datapengumuman'));
	}

	public function editData($id_pengumuman)
	{
		$data = [
			'id_pengumuman' => $id_pengumuman,
			'judul' => $this->request->getPost('judul'),
			'isi' => $this->request->getPost('isi'),
			'tanggal' => $this->request->getPost('tanggal'),
			'waktu' => $this->request->getPost('waktu'),
			'penulis' => $this->request->getPost('penulis'),
		];
		$this->ModelDataPengumuman->editData($data);

		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('admin/datapengumuman'));
	}

	public function deleteData($id_pengumuman)
	{
		$data = [
			'id_pengumuman' => $id_pengumuman
		];
		$this->ModelDataPengumuman->deleteData($data);
		session()->setFlashdata('delete', 'Data berhasil dihapus !!');
		return redirect()->to(base_url('admin/datapengumuman'));
	}
}

	//--------------------------------------------------------------------
