<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['user'] = 'UserController';
$route['userTambah'] = 'UserController/tambah';
$route['home'] = 'AppController';
