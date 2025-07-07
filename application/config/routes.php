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

$route['ortu_dashboard'] = 'ortu/dashboard/index';
