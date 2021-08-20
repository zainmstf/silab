<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelDataMatkul;
use App\Models\Admin\ModelDataMahasiswa;
use App\Models\Admin\ModelNilaiPraktikum;
use App\Controllers\BaseController;

class NilaiPraktikum extends BaseController
{
	public function __construct()
	{
		$this->ModelNilaiPraktikum = new ModelNilaiPraktikum();
		$this->ModelDataMatkul = new ModelDataMatkul();
		$this->ModelDataMahasiswa = new ModelDataMahasiswa();

		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Nilai Praktikum',
			'nilai' => $this->ModelNilaiPraktikum->getAllData(),
			'matkul' => $this->ModelDataMatkul->getAllData(),
			'mhs' => $this->ModelDataMahasiswa->getAllData()
		];
		// print_r($data['penjadwalan']);
		return view('admin/nilai_praktikum', $data);
	}
}

	//--------------------------------------------------------------------
