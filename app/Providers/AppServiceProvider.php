<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\ImageRepository;
use App\Repositories\ImageRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ImageRepositoryInterface::class, ImageRepository::class);
    }
}
