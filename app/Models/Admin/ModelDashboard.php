<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelDashboard extends Model
{

	public function totalMahasiswa()
	{
		return $this->db->table('tblmahasiswa')
			->countAllResults();
	}
	public function totalMatkul()
	{
		return $this->db->table('tblmatkul')
			->countAllResults();
	}
	public function totalDosen()
	{
		return $this->db->table('tbldosen')
			->countAllResults();
	}
	public function totalBayar()
	{
		return $this->db->table('tblpendaftaran')
			->orderBy('id_pendaftaran')
			->get()
			->getResultArray();
	}
	public function totalPraktikumSelesai()
	{
		return $this->db->table('tbljadwal')
			->where('tgl_pelak <=', date('Y-m-d'))
			->countAllResults();
	}
	public function totalPengumuman()
	{
		return $this->db->table('tbpengumuman')
			->countAllResults();
	}

	public function mhsLaki()
	{
		return $this->db->table('tblmahasiswa')
			->join('tbjadwal_mhs', 'tbjadwal_mhs.nim=tblmahasiswa.nim')
			->where('jenis_kelamin_mhs', 'Laki-laki')
			->countAllResults();
	}

	public function mhsPerempuan()
	{
		return $this->db->table('tblmahasiswa')
			->join('tbjadwal_mhs', 'tbjadwal_mhs.nim=tblmahasiswa.nim')
			->where('jenis_kelamin_mhs', 'Perempuan')
			->countAllResults();
	}
	public function mhsPerempuanMatkul()
	{
		return $this->db->table('tblpendaftaran')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tblpendaftaran.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tblpendaftaran.id_matkul')
			->where('jenis_kelamin_mhs', 'Perempuan')
			->where('matkul', 'Pemrograman Framework')
			->countAllResults();
	}
	public function mhsLakiMatkul()
	{
		return $this->db->table('tblpendaftaran')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tblpendaftaran.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tblpendaftaran.id_matkul')
			->where('jenis_kelamin_mhs', 'Laki-laki')
			->where('matkul', 'Pemrograman Framework')
			->countAllResults();
	}
	public function matkul()
	{
		return $this->db->table('tblmatkul')
			->get()
			->getResultArray();
	}
	public function mhsMatkul()
	{
		return $this->db->table('tbjadwal_mhs')
			->where('id_matkul',);
	}
}
