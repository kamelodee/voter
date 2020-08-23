<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

///users
$route['users'] = "user/index";
$route['register'] = "user/registration";
$route['login'] = "user/login";
$route['dashboard'] = "user/panel";
$route['profile'] = "user/profile";
$route['update/profile'] = "user/update";


///membertype
$route['membertype'] = "membertype/index";
$route['membertype/(:num)'] = "membertype/show/$1";
$route['membertype/create']['post'] = "membertype/store";
$route['membertype/edit/(:any)'] = "membertype/edit/$1";
$route['membertype/update/(:any)']['put'] = "membertype/update/$1";
$route['membertype/delete/(:any)']['delete'] = "membertype/delete/$1";

//pollingstation
$route['pollingstations'] = "pollingstation/index";
$route['pollingstation/(:num)'] = "pollingstation/show/$1";
$route['pollingstation/create']['post'] = "pollingstation/store";
$route['pollingstation/edit/(:any)'] = "pollingstation/edit/$1";
$route['pollingstation/update/(:any)']['put'] = "pollingstation/update/$1";
$route['pollingstation/delete/(:any)']['delete'] = "pollingstation/delete/$1";
