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
		return $this->db->table('tblmahasiswa')
			->join('tblpendaftaran', 'tblpendaftaran.nim=tblmahasiswa.nim')
			->where('jenis_kelamin_mhs', 'Perempuan')
			->where('id_matkul', '62')
			->countAllResults();
	}
	public function mhsLakiMatkul()
	{
		return $this->db->table('tblmahasiswa')
			->join('tblpendaftaran', 'tblpendaftaran.nim=tblmahasiswa.nim')
			->where('jenis_kelamin_mhs', 'Laki-laki')
			->where('id_matkul', '62')
			->countAllResults();
	}
	public function mhsPerempuanMatkul2()
	{
		return $this->db->table('tblmahasiswa')
			->join('tblpendaftaran', 'tblpendaftaran.nim=tblmahasiswa.nim')
			->where('jenis_kelamin_mhs', 'Perempuan')
			->where('id_matkul', '67')
			->countAllResults();
	}
	public function mhsLakiMatkul2()
	{
		return $this->db->table('tblmahasiswa')
			->join('tblpendaftaran', 'tblpendaftaran.nim=tblmahasiswa.nim')
			->where('jenis_kelamin_mhs', 'Laki-laki')
			->where('id_matkul', '67')
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









	public function getAllData()
	{
		return $this->db->table('tbjadwal_mhs')
			->join('tbljadwal', 'tbljadwal.id_jadwal=tbjadwal_mhs.id_jadwal')
			->join('tblmahasiswa', 'tblmahasiswa.nim=tbjadwal_mhs.nim')
			->join('tblmatkul', 'tblmatkul.id_matkul=tbjadwal_mhs.id_matkul')
			->join('tbldosen', 'tbldosen.nidn=tbjadwal_mhs.nidn')
			->orderBy('id_jadwal_mhs', 'ASC')
			->get()
			->getResultArray();
	}

	public function insertData($data)
	{
		return $this->db->table('tbjadwal_mhs')
			->insert($data);
	}

	public function editData($data)
	{
		return $this->db->table('tbjadwal_mhs')
			->where('id_jadwal_mhs', $data['id_jadwal_mhs'])
			->update($data);
	}
	public function deleteData($data)
	{
		return $this->db->table('tbjadwal_mhs')
			->where('id_jadwal_mhs', $data['id_jadwal_mhs'])
			->delete($data);
	}
	public function getNamaMahasiswa($nim)
	{
		return $this->db->table('tblmahasiswa')
			->where('nim', $nim)
			->get()
			->getResultArray();
	}
	public function getNamaDosen($id_jadwal)
	{
		return $this->db->table('tbljadwal')
			->join('tbldosen', 'tbldosen.nidn=tbljadwal.nidn')
			->where('id_jadwal', $id_jadwal)
			->get()
			->getResultArray();
	}

	public function getNidn($id_jadwal)
	{
		return $this->db->table('tbljadwal')
			->join('tbldosen', 'tbldosen.nidn=tbljadwal.nidn')
			->where('id_jadwal', $id_jadwal)
			->get()
			->getResultArray();
	}
	public function getMatkul($id_matkul)
	{
		return $this->db->table('tbljadwal')
			->join('tblmatkul', 'tblmatkul.id_matkul=tbljadwal.id_matkul')
			->where('tbljadwal.id_matkul', $id_matkul)
			->get()
			->getResultArray();
	}
}
