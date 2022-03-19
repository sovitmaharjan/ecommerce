<?php

namespace App\Providers;

use App\Contracts\BannerInterface;
use App\Contracts\BrandInterface;
use App\Contracts\CategoryInterface;
use App\Repositories\BannerRepository;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BannerInterface::class, BannerRepository::class);
        $this->app->bind(BrandInterface::class, BrandRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
