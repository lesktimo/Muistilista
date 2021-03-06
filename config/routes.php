<?php

function check_logged_in() {
    BaseController::check_logged_in();
}

$routes->get('/', function() {
    HelloWorldController::index();
});

$routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
});

$routes->get('/muistilista', 'check_logged_in', function() {
    MuistiinpanoController::index();
});


$routes->get('/mp_muokkaus', function() {
    HelloWorldController::mp_muokkaus();
});

$routes->get('/login', function() {
    KayttajaController::login();
});

$routes->post('/login', function() {
    KayttajaController::handle_login();
});

$routes->get('/register', function() {
    KayttajaController::register();
});

$routes->post('/register', function() {
    KayttajaController::handle_register();
});

$routes->post('/muistiinpano/:id/edit', 'check_logged_in', function() {
    MuistiinpanoController::update();
});

$routes->post('/muistiinpano', 'check_logged_in', function() {
    MuistiinpanoController::store();
});

$routes->get('/muistiinpano/new', 'check_logged_in', function() {
    MuistiinpanoController::create();
});

$routes->get('/muistiinpano/:id', 'check_logged_in', function($id) {
    MuistiinpanoController::show($id);
});

$routes->get('/muistiinpano/:id/edit', 'check_logged_in', function($id) {
    MuistiinpanoController::edit($id);
});

$routes->post('/muistiinpano/:id/destroy', 'check_logged_in', function($id) {
    MuistiinpanoController::destroy($id);
});

$routes->post('/logout', function() {
    KayttajaController::logout();
});

$routes->get('/kategoria', 'check_logged_in', function() {
    KategoriaController::index();
});
$routes->get('/kategoria/new', 'check_logged_in', function() {
    KategoriaController::create();
});
$routes->get('/kategoria/:id', 'check_logged_in', function($id) {
    KategoriaController::show($id);
});
$routes->post('/kategoria', 'check_logged_in', function() {
    KategoriaController::store();
});
$routes->get('/kategoria/:id/edit', 'check_logged_in', function($id) {
    KategoriaController::edit($id);
});
$routes->post('/kategoria/:id/edit', 'check_logged_in', function($id) {
    KategoriaController::update($id);
});
$routes->post('/kategoria/:id/destroy', 'check_logged_in', function($id) {
    KategoriaController::destroy($id);
});
