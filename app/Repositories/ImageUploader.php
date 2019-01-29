<?php

namespace App\Repositories;

use Cloudinary;

class ImageRepository
{
    public function __construct()
    {
        Cloudinary::config(
            [
                'cloud_name' => 'omadoyeabraham',
                'api_key' => '471377665711894',
                'api_secret' => 'gz3FwD-WuTwLPbUzQwqiKz5eI2U'
            ]
        );
    }

    public function upload($file)
    {

    }
}