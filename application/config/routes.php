<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/* 
    Route ini berfungsi untuk mengatur URL, sebagai contoh:
    1. $route ['intransaction'] = 'Home/intransaction';

       $route ['intransaction'] -> ini artinya ketika user membuka URL http://localhost/siap-kosta/intransaction
       'Home/intransaction' -> maka Controller Home dengan function intransaction yang akan dijalankan untuk URL diatas.

    2. $route['auth/login']['POST'] = 'Auth/LoginAction';

       $route['auth/login'] -> ini artinya ketika user membuka URL http://localhost/siap-kosta/auth/login
       ['POST'] -> ini artinya user harus menggunakan method POST agar url berfungsi
       'Auth/LoginAction' -> maka Controller Auth dengan function LoginAction yang akan dijalankan ketika URL dan syarat diatas terpenuhi 
    
*/
$route['default_controller'] = 'Home/index';
$route['intransaction'] = 'Home/intransaction';
$route['outtransaction'] = 'Home/outtransaction';

$route['login'] = 'Home/login';
$route['auth/login']['POST'] = 'Auth/LoginAction';
$route['auth/logout'] = 'Auth/LogoutAction';

// Routes Admin
$route['admin/dashboard'] = 'Admin/index'; // Admin = Controller ; index = function dalam Controller admin. 
$route['admin/items'] = 'Item/index';
$route['admin/report'] = 'Report/index';
$route['admin/itemin'] = 'Transaction/in_index';
$route['admin/itemout'] = 'Transaction/out_index';
$route['admin/users'] = 'User/index';
$route['admin/permissions'] = 'Permission/index';

$route['testoutput'] = 'Home/testOut';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
