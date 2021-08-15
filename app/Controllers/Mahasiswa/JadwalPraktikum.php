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
	public function insertData()
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'nim' => $this->request->getPost('nim'),
				'id_matkul' => $this->request->getPost('id_matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'tgl_bayar' => $this->request->getPost('tgl_bayar'),
				'nominal_bayar' => $this->request->getPost('nominal'),
				'biaya' => '150000',
				'tgl_daftar' => date('Y-m-d'),
				'ket_bayar' => 'Belum Validasi'

			];
			$this->ModelDaftarPraktikum->insertData($data);
		} else {
			$nama_file = $file->getRandomName();
			$data = [
				'nim' => $this->request->getPost('nim'),
				'id_matkul' => $this->request->getPost('id_matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'tgl_bayar' => $this->request->getPost('tgl_bayar'),
				'nominal_bayar' => $this->request->getPost('nominal'),
				'bukti_bayar' => $nama_file
			];
			$this->ModelDaftarPraktikum->insertData($data);
			//Upload File
			$file->move('images/bukti', $nama_file);
		}
		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to(base_url('mahasiswa/daftarpraktikum'));
	}

	public function editData($id_pendaftaran)
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'id_pendaftaran' => $id_pendaftaran,
				'nim' => $this->request->getPost('nim'),
				'id_matkul' => $this->request->getPost('id_matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'tgl_bayar' => $this->request->getPost('tgl_bayar'),
				'nominal_bayar' => $this->request->getPost('nominal'),
				'biaya' => '150000',
				'tgl_daftar' => date('Y-m-d'),
				'ket_bayar' => 'Belum Validasi'
			];
			$this->ModelDaftarPraktikum->editData($data);
		} else {
			$datamhs = $this->ModelDaftarPraktikum->detailData($id_pendaftaran);
			if (($datamhs['bukti_bayar'] != "")) {
				unlink('./images/bukti/' . $datamhs['bukti_bayar']);
			}
			$nama_file = $file->getRandomName();
			$data = [
				'id_pendaftaran' => $id_pendaftaran,
				'nim' => $this->request->getPost('nim'),
				'id_matkul' => $this->request->getPost('id_matkul'),
				'prodi' => $this->request->getPost('prodi'),
				'tgl_bayar' => $this->request->getPost('tgl_bayar'),
				'nominal_bayar' => $this->request->getPost('nominal'),
				'bukti_bayar' => $nama_file
			];
			$this->ModelDaftarPraktikum->editData($data);
			//Upload File
			$file->move('images/bukti', $nama_file);
		}
		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('mahasiswa/daftarpraktikum'));
	}
}

	//--------------------------------------------------------------------