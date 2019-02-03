<?php

namespace App\Listeners;

use App\Events\ImageUploadedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class ImageUploadedListener implements ShouldQueue
{
    /**
     * The name of the connection the job should be sent to.
     *
     * @var string|null
     */
    public $connection = 'redis';

    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public $queue = 'image-upload-queue';

    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public $delay = 1;

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
        Log::info("The handle was called");
        Cache::put('someKey222', 'foobarzzzzzzzz', 10);
    }

    /**
     * Handle a job failure.
     *
     * @param  \App\Events\ImageUploadedEvent $event
     * @param  \Exception  $exception
     * @return void
     */
    public function failed(ImageUploadedEvent $event, $exception)
    {
        Log::info($event);
    }
}
