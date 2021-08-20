<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ModelDashboard;
use App\Models\Admin\ModelDataMahasiswa;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function __construct()
	{
		$this->ModelDataMahasiswa = new ModelDataMahasiswa();
		$this->ModelDashboard = new ModelDashboard();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard Admin',
			'datamahasiswa' => $this->ModelDataMahasiswa->getAllData(),
			'totalmhs' => $this->ModelDashboard->totalMahasiswa(),
			'totalmatkul' => $this->ModelDashboard->totalMatkul(),
			'totaldosen' => $this->ModelDashboard->totalDosen(),
			'totalbayar' => $this->ModelDashboard->totalBayar(),
			'totalpraktikum' => $this->ModelDashboard->totalPraktikumSelesai(),
			'totalpengumuman' => $this->ModelDashboard->totalPengumuman(),
			'mhslaki' => $this->ModelDashboard->mhsLaki(),
			'mhsperempuan' => $this->ModelDashboard->mhsPerempuan(),
			'matkul' => $this->ModelDashboard->matkul(),
			'matkulmhsp' => $this->ModelDashboard->mhsPerempuanMatkul(),
			'matkulmhsl' => $this->ModelDashboard->mhsLakiMatkul(),
		];
		// print_r($data['matkulmhsl']);
		return view('admin/dashboard', $data);
	}
}

	//--------------------------------------------------------------------
