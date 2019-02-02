<?php

namespace App\Repositories;

use Cloudinary;
use Cloudinary\Uploader as CloudinaryUploader;

use App\Events\ImageUploadedEvent;

class ImageRepository implements ImageRepositoryInterface
{
    public function __construct()
    {
        Cloudinary::config(
            [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET')
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
        $cloudinaryUploadPreset = env('CLOUDINARY_UPLOAD_PRESET');
        $options = [
            'tags' => $tags
        ];

        $uploadResponse = CloudinaryUploader::unsigned_upload($file, $cloudinaryUploadPreset, $options);

        // Dispatch the image uploaded event so that listeners can handle it appropriately.
        event(new ImageUploadedEvent($uploadResponse));

        return $uploadResponse;
    }
}
