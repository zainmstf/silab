<?php

namespace App\Controllers\Mahasiswa;

use App\Models\Mahasiswa\ModelJadwalPraktikum;
use App\Controllers\BaseController;

class JadwalPraktikum extends BaseController
{
	public function __construct()
	{
		$this->ModelJadwalPraktikum = new ModelJadwalPraktikum();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Mahasiswa',
			'jadwalpraktikum' => $this->ModelJadwalPraktikum->getJadwalPraktikum()
		];
		// print_r($data['datamhs']);
		return view('mahasiswa/jadwal_praktikum', $data);
	}
}

	//--------------------------------------------------------------------
