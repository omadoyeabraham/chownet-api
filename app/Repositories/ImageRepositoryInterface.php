<?php

namespace App\Repositories;

/**
 * Interface for the image repository
 */
interface ImageRepositoryInterface
{
    /**
     * Upload an image to the data store (cloudinary)
     *
     * @param $file
     * @param $tags
     * @return mixed
     */
    public function upload($file, $tags);
}
