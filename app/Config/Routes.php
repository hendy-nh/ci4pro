<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Test');
$routes->setDefaultMethod('view_home');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('proses', 'Test::proses_login');
$routes->get('galeri', 'Galeri::view_galeri');
$routes->get('news', 'News::view_news');
$routes->get('user', 'User::view_user');
$routes->get('insert_news', 'News::insert');
$routes->post('insert_news_data', 'News::insert_news_data');
$routes->get('delete_news/(:any)', 'News::delete_news/$1');
$routes->get('detail_news/(:any)', 'Front::detail_news/$1');
$routes->get('detail_news_1/(:any)', 'Home::detail_news/$1');
$routes->get('admin', 'Admin::index');
$routes->get('admin_news', 'Admin::view_news');
$routes->post('admin_news_insert', 'Admin::insert_news_data');
$routes->get('news_add', 'Admin::news_add');
$routes->get('admin_delete_news/(:any)', 'Admin::delete_news/$1');
$routes->get('admin_detail_news/(:any)', 'Admin::detail_news/$1');
$routes->post('admin_update_news/(:any)', 'Admin::update_news/$1');
$routes->get('detail_news_1/(:any)', 'Front::detail_news/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
