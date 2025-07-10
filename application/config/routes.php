<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'auth/login';
$route['loginn'] = 'auth/loginn';
$route['regis'] = 'auth/register';

$route['admin_dashboard'] = 'admin/dashboard/index';

$route['admin_users_index'] = 'admin/users/index';
$route['admin_users_edit'] = 'admin/users/edit';
$route['admin_users_input'] = 'admin/users/input';
$route['admin_users_delete'] = 'admin/users/delete';

$route['admin_pegawai_index'] = 'admin/pegawai/index';
$route['admin_pegawai_index_edit'] = 'admin/pegawai/edit';
$route['admin_pegawai_index_input'] = 'admin/pegawai/input';
$route['admin_pegawai_index_delete'] = 'admin/pegawai/delete';

$route['admin_siswa_index'] = 'admin/siswa/index';
$route['admin_siswa_edit'] = 'admin/siswa/edit';
$route['admin_siswa_input'] = 'admin/siswa/input';
$route['admin_siswa_delete'] = 'admin/siswa/delete';
$route['admin_siswa_detail'] = 'admin/siswa/detail';

$route['admin_buku_index'] = 'admin/buku/index';
$route['admin_buku_edit'] = 'admin/buku/edit';
$route['admin_buku_input'] = 'admin/buku/input';
$route['admin_buku_delete'] = 'admin/buku/delete';
$route['admin_buku_detail'] = 'admin/buku/detail';

$route['admin_berita_index'] = 'admin/berita/index';
$route['admin_berita_edit'] = 'admin/berita/edit';
$route['admin_berita_input'] = 'admin/berita/input';
$route['admin_berita_delete'] = 'admin/berita/delete';
$route['admin_berita_detail'] = 'admin/berita/detail';

$route['ortu_dashboard'] = 'ortu/dashboard/index';
$route['ortu_berita'] = 'ortu/beritaortu/index';
$route['ortu_buku'] = 'ortu/bukuortu/index';
$route['ortu_buku_detail'] = 'ortu/bukuortu/detail';
