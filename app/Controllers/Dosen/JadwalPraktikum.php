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
	public function getJumlahMahasiswa($id_jadwal)
	{
		$data = $this->ModelJadwalPraktikum->getJumlahMhs($id_jadwal);
		echo "<p>" . $data . " Mahasiswa" . "</p>";
	}
}

	//--------------------------------------------------------------------
