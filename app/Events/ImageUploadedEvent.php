<?php

namespace App\Events;

class ImageUploadedEvent extends Event
{
    /**
     * The response object returned by cloudinary after a successful image upload.
     *
     * @var array
     */
    public $uploadData;

    /**
     * Create a new event instance.
     *
     * @param $uploadData
     */
    public function __construct($uploadData)
    {
        $this->uploadData = $uploadData;
    }
}
