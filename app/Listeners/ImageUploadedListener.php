<?php

namespace App\Listeners;

use App\Events\ImageUploadedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ImageUploadedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param ImageUploadedEvent $event
     */
    public function handle(ImageUploadedEvent $event)
    {
        dd($event);
    }
}
