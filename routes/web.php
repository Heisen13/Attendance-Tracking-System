<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/checkin', ['middleware' => 'auth', 'uses' => 'AttendanceController@checkIn']);
$router->post('/checkout', ['middleware' => 'auth', 'uses' => 'AttendanceController@checkOut']);
