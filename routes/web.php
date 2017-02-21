<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('hoge', function () {
    return 'Hello World';
});

$app->get('user/{id}', function ($id) {
    return 'User '.$id;
});

$app->get('profile', ['as' => 'profile', function () {
    //
}]);
$app->get('foo', function () {
    $url = route('profile');
    return $url;
});

$app->get('user/{id}/profile', ['as' => 'user-profile', function ($id) {
    //
}]);
$app->get('bar', function () {
    $url = route('user-profile', ['id' => 1]);
    return $url;
});
