<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelDataDosen;
use App\Models\Admin\ModelDataMatkul;
use App\Models\Admin\ModelDataMahasiswa;
use App\Models\Admin\ModelPenjadwalan;
use App\Models\Admin\ModelDataPraktikum;
use App\Controllers\BaseController;

class Penjadwalan extends BaseController
{
	public function __construct()
	{
		$this->ModelPenjadwalan = new ModelPenjadwalan();
		$this->ModelDataMatkul = new ModelDataMatkul();
		$this->ModelDataMahasiswa = new ModelDataMahasiswa();
		$this->ModelDataDosen = new ModelDataDosen();
		$this->ModelDataPraktikum = new ModelDataPraktikum();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Penjadwalan Praktikum',
			'penjadwalan' => $this->ModelPenjadwalan->getAllData(),
			'matkul' => $this->ModelDataMatkul->getAllData(),
			'dsn' => $this->ModelDataDosen->getAllData(),
			'mhs' => $this->ModelDataMahasiswa->getAllData(),
			'jadwal' => $this->ModelDataPraktikum->getAllData(),
		];
		// print_r($data['penjadwalan']);
		return view('admin/penjadwalan', $data);
	}

	public function insertData()
	{
		$data = [
			'nim' => $this->request->getPost('nim'),
			'id_jadwal' => $this->request->getPost('id_jadwal'),
			'id_matkul' => $this->request->getPost('id_matkul'),
			'prodi' => $this->request->getPost('prodi'),
			'waktu' => $this->request->getPost('waktu'),
			'nidn' => $this->request->getPost('nidn')
		];
		$this->ModelPenjadwalan->insertData($data);

		session()->setFlashdata('tambah', 'Data berhasil ditambahkan !!');
		return redirect()->to(base_url('admin/penjadwalan'));
	}


	public function editData($id_jadwal_mhs)
	{

		$data = [
			'id_jadwal_mhs' => $id_jadwal_mhs,
			'nim' => $this->request->getPost('nim'),
			'id_jadwal' => $this->request->getPost('id_jadwal'),
			'id_matkul' => $this->request->getPost('id_matkul'),
			'prodi' => $this->request->getPost('prodi'),
			'waktu' => $this->request->getPost('waktu'),
			'nidn' => $this->request->getPost('nidn')
		];
		$this->ModelPenjadwalan->editData($data);

		session()->setFlashdata('edit', 'Data berhasil diedit !!');
		return redirect()->to(base_url('admin/penjadwalan'));
	}

	public function deleteData($id_jadwal_mhs)
	{
		$data = [
			'id_jadwal_mhs' => $id_jadwal_mhs
		];
		$this->ModelPenjadwalan->deleteData($data);
		session()->setFlashdata('delete', 'Data berhasil dihapus !!');
		return redirect()->to(base_url('admin/penjadwalan'));
	}

	public function dataMahasiswa($nim)
	{
		$data = $this->ModelPenjadwalan->getNamaMahasiswa($nim);
		foreach ($data as $key => $value) {
			echo '<input type="text" name="nama_mhs" class="form-control" value="' . $value['nama_mhs'] . '" readonly>
			';
		}
	}
	public function dataDosen($id_jadwal)
	{
		$data = $this->ModelPenjadwalan->getNamaDosen($id_jadwal);
		foreach ($data as $key => $value) {
			echo '<input type="hidden" name="nidn" class="form-control nidndosen" value="' . $value['nidn'] . '" >
			<input type="text" name="namadsn" class="form-control namadosen" value="' . $value['nama_dosen'] . '" readonly>
			';
		};
	}
	public function dataMatkul($id_matkul)
	{
		$data = $this->ModelPenjadwalan->getMatkul($id_matkul);
		echo '<option value="">-- Pilih Jadwal --</option>';
		foreach ($data as $key => $value) {
			echo '<option value="' . $value['id_jadwal'] . '">' . $value['matkul'] . ' ' .  $value['ruang'] . ' - ' . date("l, d F Y", strtotime($value['tgl_pelak'])) . '</option>';
		};
	}
}

	//--------------------------------------------------------------------
