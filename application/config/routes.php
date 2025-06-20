<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'auth/login';
$route['loginn'] = 'auth/loginn';
$route['regis'] = 'auth/register';

$route['admin-dashboard'] = 'admin/dashboard/index';
$route['ortu-dashboard'] = 'ortu/dashboard/index';
