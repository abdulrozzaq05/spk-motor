<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('Dashboard', 'Dashboard::index');

$routes->get('Dashboard/info', 'Dashboard::info');

$routes->get('Dashboard/viewbobot', 'Dashboard::viewbobot');

$routes->get('Dashboard/viewmatriks', 'Dashboard::viewmatriks');

$routes->get('Dashboard/viewmtr', 'Dashboard::viewmtr');

$routes->get('Dashboard/viewkriteria', 'Dashboard::viewkriteria');

$routes->get('Dashboard/viewnormalisasi', 'Dashboard::viewnormalisasi');

$routes->get('Dashboard/viewpreferensi', 'Dashboard::viewpreferensi');

$routes->get('Dashboard/viewranking', 'Dashboard::viewranking');

$routes->get('Dashboard/formTambahMotor', 'Dashboard::formTambahMotor');

$routes->get('Dashboard/formTambahMatriks', 'Dashboard::formTambahMatriks');

$routes->get('Dashboard/formTambahBobot', 'Dashboard::formTambahBobot');

$routes->get('Dashboard/formTambahKriteria', 'Dashboard::formTambahKriteria');

$routes->post('Dashboard/simpandatamotor', 'Dashboard::simpandatamotor');

$routes->post('Dashboard/simpandatamatriks', 'Dashboard::simpandatamatriks');

$routes->post('Dashboard/simpandatabobot', 'Dashboard::simpandatabobot');

$routes->post('Dashboard/simpandatakriteria', 'Dashboard::simpandatakriteria');

$routes->post('Dashboard/editmtr/(:any)', 'Dashboard::editmtr/$1');

$routes->post('Dashboard/editmatriks/(:num)', 'Dashboard::editmatriks/$1');

$routes->post('Dashboard/editbobot/(:num)', 'Dashboard::editbobot/$1');

$routes->post('Dashboard/editkriteria/(:any)', 'Dashboard::editkriteria/$1');

$routes->get('Dashboard/formEditMtr/(:any)', 'Dashboard::formEditMtr/$1');

$routes->get('Dashboard/formEditMatriks/(:any)', 'Dashboard::formEditMatriks/$1');

$routes->get('Dashboard/formEditBobot/(:any)', 'Dashboard::formEditBobot/$1');

$routes->get('Dashboard/formEditKriteria/(:any)', 'Dashboard::formEditKriteria/$1');

$routes->get('Dashboard/deletematriks/(:num)', 'Dashboard::deletematriks/$1');

$routes->get('Dashboard/deletemotor/(:any)', 'Dashboard::deletemotor/$1');

$routes->get('Dashboard/deletebobot/(:num)', 'Dashboard::deletebobot/$1');

$routes->get('Dashboard/deletekriteria/(:any)', 'Dashboard::deletekriteria/$1');

$route['Dashboard'] = 'Dashboard';
