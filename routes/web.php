<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Upload an image
$router->post('api/image', 'ImageController@upload');

// Get list of tags in the system
$router->get('api/tags', 'TagController@index');

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

