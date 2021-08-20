<?php

namespace App\Controllers\Mahasiswa;

use App\Models\Mahasiswa\ModelNilaiPraktikum;
use App\Controllers\BaseController;

class NilaiPraktikum extends BaseController
{
	public function __construct()
	{
		$this->ModelNilaiPraktikum = new ModelNilaiPraktikum();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Mahasiswa',
			'nilaipraktikum' => $this->ModelNilaiPraktikum->getNilaiPraktikum()
		];
		// print_r($data['datamhs']);
		return view('mahasiswa/nilai_praktikum', $data);
	}
}

	//--------------------------------------------------------------------
