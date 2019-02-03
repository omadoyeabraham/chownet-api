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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('api/image', 'ImageController@upload');

// $router->get('/testDatabase', function () {
//     App\User::create([
//         'email' => uniqid() . '@example.com',
//         'name' => 'Test User',
//         'password' => 'secret'
//     ]);
//     return response()->json(App\User::all());
// });

// Route::get('/testCache', function () {
//     Cache::put('someKey', 'foobar', 10);
//     \Illuminate\Support\Facades\Redis::set('name', 'Taylor');
//     \Illuminate\Support\Facades\Redis::set('name2', 'Taylor');
//     \Illuminate\Support\Facades\Redis::set('name3', 'Taylor');
//     \Illuminate\Support\Facades\Redis::set('name4', 'Taylor');
//     \Illuminate\Support\Facades\Redis::set('name5', 'Taylor');
//     \Illuminate\Support\Facades\Redis::set('name6', 'Taylor');
//     return Cache::get('someKey222');
// });

