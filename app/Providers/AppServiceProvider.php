<?php

namespace App\Providers;

use App\Contracts\AttributeInterface;
use App\Contracts\BannerInterface;
use App\Contracts\BrandInterface;
use App\Contracts\CategoryInterface;
use App\Contracts\GeneralSettingInterface;
use App\Contracts\OrderInterface;
use App\Contracts\PaymentInterface;
use App\Contracts\ProductInterface;
use App\Contracts\UserInterface;
use App\Repositories\AttributeRepository;
use App\Repositories\BannerRepository;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\GeneralSettingRepository;
use App\Repositories\OrderRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\ProductRepository;
use App\Repositories\UserRepository;
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
        $this->app->bind(AttributeInterface::class, AttributeRepository::class);
        $this->app->bind(ProductInterface::class, ProductRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(GeneralSettingInterface::class, GeneralSettingRepository::class);
        $this->app->bind(OrderInterface::class, OrderRepository::class);
        $this->app->bind(PaymentInterface::class, PaymentRepository::class);
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
