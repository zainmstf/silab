<?php

namespace App\Controllers\Dosen;

use App\Models\Dosen\ModelJadwalPraktikum;
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
			'title' => 'Jadwal Praktikum',
			'jadwalpraktikum' => $this->ModelJadwalPraktikum->getJadwalPraktikum(),
			'jumlahjadwal' => $this->ModelJadwalPraktikum->getJumlahJadwalPraktikum(),
		];
		// print_r($id_jadwal);
		return view('dosen/jadwal_praktikum', $data);
	}
	public function getJumlahMahasiswa($id_jadwal)
	{
		$data = $this->ModelJadwalPraktikum->getJumlahMhs($id_jadwal);
		echo "<p>" . $data . " Mahasiswa" . "</p>";
	}
}

	//--------------------------------------------------------------------
