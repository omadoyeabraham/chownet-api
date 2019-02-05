<?php

$router->get('/', function () use ($router) {
    return "The ChowNet API is online 🥗🌽🍿";
});

// Upload an image
$router->post('api/image', 'ImageController@upload');

// Get list of tags in the system
$router->get('api/tags', 'TagController@index');


