<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelPendaftaran;
use App\Models\Admin\ModelDataMatkul;
use App\Controllers\BaseController;

class Pendaftaran extends BaseController
{
	public function __construct()
	{
		$this->ModelPendaftaran = new ModelPendaftaran();
		$this->ModelDataMatkul = new ModelDataMatkul();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Pendaftaran Praktikum',
			'pendaftaran' => $this->ModelPendaftaran->getAllData(),
			'matkul' => $this->ModelDataMatkul->getAllData(),
		];
		// print_r($data['datapraktikum']);
		return view('admin/pendaftaran', $data);
	}

	public function editData($id_pendaftaran)
	{
		$data = [
			'id_pendaftaran' => $id_pendaftaran,
			'ket_bayar' => $this->request->getPost('ket_bayar'),
		];
		$this->ModelPendaftaran->editData($data);

		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('admin/pendaftaran'));
	}
}

	//--------------------------------------------------------------------
