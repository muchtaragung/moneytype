<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'main/redirect';
$route['default_controller/(:any)'] = 'main/redirect/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//moneytype
$route['id/result'] = 'moneytype/result';
$route['result'] = 'moneytype/result_en';

$route['id/finish'] = 'main/finish';
$route['finish'] = 'main/finish';

//home
$route['id'] = 'main';
$route['en'] = 'main';

//about
$route['id/about'] = 'about';

//One-coin service
$route['one-coin-service'] = 'ocs';
$route['id/one-coin-service'] = 'ocs';
//Financial-planning
$route['financial-planning'] = 'ocs/fp';
$route['id/financial-planning'] = 'ocs/fp';
//money-coaching
$route['money-coaching'] = 'ocs/mc';
$route['id/money-coaching'] = 'ocs/mc';
//money-coaching
$route['eight-money-types'] = 'emt';
$route['id/eight-money-types'] = 'emt';

//moneytype
$route['id/moneytype'] = 'moneytype';

//resource
$route['id/resource'] = 'resource';
$route['id/resource/archive/(:num)'] = 'resource/archive/$1';
$route['id/search'] = 'resource/search';
$route['id/artikel/(:any)'] = "resource/detail_resource/$1";
$route['id/resource/category/(:any)'] = "resource/category/$1";
$route['id/resource/add_komen'] = "resource/add_komen";

$route['artikel/(:any)'] = "resource/detail_resource/$1";
$route['resource/(:num)'] = "resource";
$route['search'] = 'resource/search';

// contact
$route['id/contact'] = 'contact';

//admin
$route['id/admin/login'] = 'admin/login';
$route['admin'] = 'admin/dashboard';
// $route['id/admin/dashboard'] = 'admin';
