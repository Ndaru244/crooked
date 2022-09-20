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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Front-End  Routers Pages */
$route['about'] = 'main/about';
$route['detail/(:any)'] = 'main/detailproduct/$1';
// $route['shopping'] = 'main/shopping';
$route['koleksi'] = 'main/koleksi';

/* Front-End Routers Pages */
$route['login'] = 'auth';
$route['admin/dashboard'] = 'admin/dashboard';

$route['admin/product'] = 'admin/dashboard/product';
$route['admin/product/add'] = 'admin/dashboard/product_add';
$route['admin/product/detail/(:any)'] = 'admin/dashboard/product_detail/$1';
$route['admin/product/edit/(:any)'] = 'admin/dashboard/product_edit/$1';
$route['admin/product/delete/(:any)'] = 'admin/dashboard/product_delete/$1';
$route['admin/picture_delete/(:any)'] = 'admin/dashboard/picture_delete/$1';

$route['admin/category'] = 'admin/dashboard/category';
$route['admin/category/add'] = 'admin/dashboard/category_add';
$route['admin/category/edit/(:any)'] = 'admin/dashboard/category_edit/$1';
$route['admin/category/delete/(:any)'] = 'admin/dashboard/category_delete/$1';

$route['admin/about-setting'] = 'admin/dashboard/about';
$route['admin/about_update/(:any)'] = 'admin/dashboard/about_update/$1';

$route['admin/profile'] = 'admin/dashboard/profile';
$route['admin/profile/security'] = 'admin/dashboard/change_pass';