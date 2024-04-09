<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Admin side Routes
$routes->get('/admin', 'Admin_login::index');
$routes->post('/admin', 'Admin_login::index');
$routes->get('/admin/signout', 'Admin_login::signout');
// dashboard
$routes->get('/admin/dashboard', 'Admin_login::dashboard');
$routes->post('/admin/dashboard', 'Admin_login::dashboard');
// blog
$routes->get('/admin/blog', 'Admin_login::blog');
$routes->get('/admin/blog/delete/(:num)', 'Admin_login::blog_delete/$1');
$routes->get('/admin/blog/edit/(:num)', 'Admin_login::blog_edit/$1');
$routes->PUT('/admin/blog/update/(:num)', 'Admin_login::blog_update/$1');
$routes->get('/admin/posts', 'Admin_login::posts');
$routes->post('/admin/posts', 'Admin_login::posts');
$routes->get('/admin/comments', 'Admin_login::comments');
$routes->get('/admin/media', 'Admin_login::media');
// users
$routes->get('/admin/users', 'Admin_login::users');
$routes->post('/admin/users', 'Admin_login::users');
$routes->get('/admin/profile', 'Admin_login::profile');
$routes->get('/admin/contact', 'Admin_login::contact');
//category
$routes->get('/admin/category', 'Admin_login::category');
$routes->post('/admin/category', 'Admin_login::category');
$routes->get('/admin/category/add', 'Admin_login::add_category');
$routes->post('/admin/category/add', 'Admin_login::add_category');
$routes->get('/admin/category/edit/(:num)', 'Admin_login::category_edit/$1');
$routes->PUT('/admin/category/update/(:num)', 'Admin_login::category_update/$1');
$routes->get('/admin/category/delete/(:num)', 'Admin_login::category_delete/$1');
//users
$routes->get('/admin/users/delete/(:num)', 'Admin_login::users_delete/$1');
$routes->get('/admin/users/add', 'Admin_login::users_add');
$routes->post('/admin/users/add', 'Admin_login::users_add');
$routes->get('/admin/users/edit/(:num)', 'Admin_login::users_edit/$1');
$routes->PUT('/admin/users/update/(:num)', 'Admin_login::users_update/$1');





/// Client Side

$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about_us');
$routes->get('/contact', 'Home::contact_us');
$routes->get('/single_view/(:num)', 'Home::single_view/$1');
$routes->get('/single_view_api/(:num)', 'Home::single_view_api/$1');
$routes->get('/api', 'apiController::index');

// Routes For Api Ajax
$routes->post('/apiController/filter', 'apiController::filter');
$routes->post('/apiController/allPosts', 'apiController::allPosts');

$routes->get('/api/filter/(:num)', 'apiController::filter/$1');
$routes->get('/api/single_view_api_db/(:num)', 'apiController::single_view_api_db/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}