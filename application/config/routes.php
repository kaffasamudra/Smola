<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'auth/login';
$route['loginn'] = 'auth/loginn';
$route['regis'] = 'auth/register';

$route['admin_dashboard'] = 'admin/dashboard/index';
$route['admin_kepegawaian_index'] = 'admin/kepegawaian/index/index';
$route['admin_kepegawaian_edit_page'] = 'admin/kepegawaian/edit/edit';
$route['admin_kepegawaian_add_page'] = 'admin/kepegawaian/add/add';
$route['admin_kepegawaian_delete_page'] = 'admin/kepegawaian/delete/delete';

$route['ortu_dashboard'] = 'ortu/dashboard/index';
