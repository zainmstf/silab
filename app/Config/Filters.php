<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Exception;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'FilterUser' => \App\Filters\FilterUser::class,
		'FilterMahasiswa' => \App\Filters\FilterMahasiswa::class,
		'FilterDosen' => \App\Filters\FilterDosen::class
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'FilterMahasiswa' => ['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'admin',
				'dosen',
			]],
			'FilterUser' => ['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'admin',
				'dosen',
			]],
			'FilterDosen' => ['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'dosen',
				'admin',
			]]
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			'FilterMahasiswa' => ['except' => [
				'home', 'home/*',
				'mahasiswa', 'mahasiswa/*',
			]],
			'FilterUser' => ['except' => [
				'home', 'home/*',
				'admin/*',
			]],
			'FilterDosen' => ['except' => [
				'home', 'home/*',
				'dosen/*',
			]],
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
