<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'general';
//GENERAL AREA
$route['login'] = 'general/login';
$route['logout'] = 'general/logout';
$route['forgotPassword'] = 'general/forgotPassword';
$route['profile'] = 'general/profile';

//ADMIN AREA
$route['dashboardAdmin'] = 'admin/dashboard';
$route['webconf'] = 'admin/webconf';
$route['account'] = 'admin/account';
$route['createAccount/(:any)'] = 'admin/createAccount/$1';
$route['detailAccount/(:any)'] = 'admin/detailAccount/$1';
$route['accountTacac'] = 'admin/accountTacac';
$route['createAccountTacac/(:any)'] = 'admin/createAccountTacac/$1';
$route['detailAccountTacac/(:any)'] = 'admin/detailAccountTacac/$1';
$route['dataLog'] = 'admin/dataLog';
$route['exportXml'] = 'admin/exportXml';
$route['test'] = 'admin/test';

//USER AREA
$route['dashboardUser'] = 'user/dashboard';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
