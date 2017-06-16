<?php

// Some variants of using Route

/*
 * Simple routes
*/

Route::get('/', function () {
    return 'Hello, World!';
});

// Returning a view directly (without using a controller or passing in any data)
Route::get('/simple-view', function () {
    return view('simple');
});

/*
 * Responding based on HTTP verbs
*/

Route::post('/', function () {
    // Responds to a post request
});

Route::put('/', function () {
    // Responds to a put request
});

Route::delete('/', function () {
    // Responds to a delete request
});

Route::any('/takes-anything', function () {
    // Responds to any request
});

Route::match(['get', 'post'], '/', function () {
    // Responds to get and post requests
});

/*
 * See also (for interest):
 *      - Route parameters https://laravel.com/docs/5.4/routing#route-parameters
 *      - Named routes https://laravel.com/docs/5.4/routing#named-routes
 *      - Regular expression constraints https://laravel.com/docs/5.4/routing#parameters-regular-expression-constraints
*/