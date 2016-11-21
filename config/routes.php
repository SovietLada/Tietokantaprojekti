<?php

$routes->get('/hiekkalaatikko', function() {

    MemoController::sandbox();
});

$routes->get('/', function() {

    MemoController::index();
});

$routes->get('/categories', function() {

    MemoController::categories();
});

$routes->post('/', function() {

    MemoController::store();
});

$routes->get('/new', function() {

    MemoController::create();
});

$routes->get('/:id', function($id) {
    
    MemoController::edit($id);
});

