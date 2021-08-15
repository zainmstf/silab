<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
	public function __construct()
	{
		$this->ModelAuth = new ModelAuth();
		helper('form');
	}

	public function index()
	{
		$data['title'] = "Login";
		return view('auth/login_mhs', $data);
	}

	public function login_user()
	{
		$data['title'] = "Login";
		return view('auth/login', $data);
	}
	public function login_dsn()
	{
		$data['title'] = "Login";
		return view('auth/login_dsn', $data);
	}

	public function cek_login_user()
	{
		if ($this->validate([
			'username' => [
				'label' => 'Username',
				'rules' => 'required|min_length[10]',
				'errors' => [
					'required' => '[field] Wajib di isi !!',
					'nim' => 'Masukkan nim anda  !!'
				]
			],
			'password' => [
				'label' => 'password',
				'rules' => 'required',
				'errors' => [
					'required' => '[field] Wajib di isi !!',
				]
			]
		])) {
			// Valid
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');
			$cek_login = $this->ModelAuth->login_user($username, $password);
			if ($cek_login) {
				session()->set('username', $cek_login['username']);
				session()->set('password', $cek_login['pwd_admin']);
				session()->set('nama', $cek_login['nama_admin']);
				session()->set('foto', 'userx.jpg');
				session()->set('level', $cek_login['level']);
				return redirect()->to(base_url('admin/dashboard'));
			} else {
				session()->setFlashdata('pesan', 'Username atau Password Salah !!');
				return redirect()->to(base_url('admin/'));
			}
		} else {
			//Tidak Valid
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('admin/'));
		}
	}
	public function cek_login_mhs()
	{
		if ($this->validate([
			'username' => [
				'label' => 'Username',
				'rules' => 'required|min_length[10]',
				'errors' => [
					'required' => '[field] Wajib di isi !!',
					'nim' => 'Masukkan nim anda  !!'
				]
			],
			'password' => [
				'label' => 'password',
				'rules' => 'required',
				'errors' => [
					'required' => '[field] Wajib di isi !!',
				]
			]
		])) {
			// Valid
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');
			$cek_login = $this->ModelAuth->login_mhs($username, $password);
			if ($cek_login) {
				session()->set('username', $cek_login['nim']);
				session()->set('password', $cek_login['pwd_mhs']);
				session()->set('nama', $cek_login['nama_mhs']);
				session()->set('jekel', $cek_login['jenis_kelamin_mhs']);
				session()->set('prodi', $cek_login['prodi']);
				session()->set('semester', $cek_login['semester']);
				session()->set('kelas', $cek_login['kelas']);
				session()->set('email', $cek_login['email_mhs']);
				session()->set('telp', $cek_login['telp_mhs']);
				session()->set('foto', $cek_login['foto_mhs']);
				session()->set('level', $cek_login['level']);
				return redirect()->to(base_url('mahasiswa'));
			} else {
				session()->setFlashdata('pesan', 'Username atau Password Salah !!');
				return redirect()->to(base_url('/'));
			}
		} else {
			//Tidak Valid
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('/'));
		}
	}
	public function cek_login_dsn()
	{
		if ($this->validate([
			'username' => [
				'label' => 'Username',
				'rules' => 'required|min_length[10]',
				'errors' => [
					'required' => '[field] Wajib di isi !!',
					'nim' => 'Masukkan nim anda  !!'
				]
			],
			'password' => [
				'label' => 'password',
				'rules' => 'required',
				'errors' => [
					'required' => '[field] Wajib di isi !!',
				]
			]
		])) {
			// Valid
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');
			$cek_login = $this->ModelAuth->login_dsn($username, $password);
			if ($cek_login) {
				session()->set('username', $cek_login['nidn']);
				session()->set('password', $cek_login['pwd_dosen']);
				session()->set('nama', $cek_login['nama_dosen']);
				session()->set('jekel', $cek_login['jenis_kelamin_dsn']);
				session()->set('email', $cek_login['email_dsn']);
				session()->set('telp', $cek_login['telp_dsn']);
				session()->set('foto', $cek_login['foto_dsn']);
				session()->set('level', $cek_login['level']);
				return redirect()->to(base_url('dosen/dashboard'));
			} else {
				session()->setFlashdata('pesan', 'Username atau Password Salah !!');
				return redirect()->to(base_url('dosen/'));
			}
		} else {
			//Tidak Valid
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('dosen/'));
		}
	}
	public function logout()
	{
		session()->remove('username');
		session()->remove('password');
		session()->remove('nama');
		session()->remove('jekel');
		session()->remove('prodi');
		session()->remove('semester');
		session()->remove('kelas');
		session()->remove('email');
		session()->remove('telp');
		session()->remove('foto');
		session()->remove('level');
		session()->setFlashdata('pesan', 'Logout Success');
		return redirect()->to(base_url('/'));
	}
	//--------------------------------------------------------------------

}
