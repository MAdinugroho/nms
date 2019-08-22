<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'general';
//GENERAL AREA
$route['login'] = 'general/login';
$route['logout'] = 'general/logout';

//ADMIN AREA
$route['dashboard'] = 'admin/dashboard';
$route['webconf'] = 'admin/webconf';
$route['accountTacac'] = 'admin/accountTacac';
$route['createAccountTacac/(:any)'] = 'admin/createAccountTacac/$1';
$route['detailAccountTacac/(:any)'] = 'admin/detailAccountTacac/$1';
$route['exportXml'] = 'admin/exportXml';
$route['test'] = 'admin/test';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
