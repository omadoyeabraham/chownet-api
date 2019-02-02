<?php

namespace App\Repositories;

use Cloudinary;

class ImageRepository implements ImageRepositoryInterface
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


    /**
     * Upload an image to the data store (cloudinary)
     *
     * @param $file
     * @param $tags
     * @return mixed
     */
    public function upload($file, $tags)
    {
        // TODO: Implement upload() method.
        dd("In the upload method");
    }
}
