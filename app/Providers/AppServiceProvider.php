<?php

namespace App\Providers;

use App\Contracts\Admin\AccountRequestInterface;
use App\Contracts\Admin\AttributeInterface;
use App\Contracts\Admin\BannerInterface;
use App\Contracts\Admin\BrandInterface;
use App\Contracts\Admin\CategoryInterface;
use App\Contracts\Admin\GeneralSettingInterface;
use App\Contracts\Admin\OrderInterface;
use App\Contracts\Admin\PaymentInterface;
use App\Contracts\Admin\ProductInterface;
use App\Contracts\Admin\UserInterface;
use App\Contracts\Admin\UserProfileInterface;
use App\Contracts\HomeInterface;
use App\Models\GeneralSetting;
use App\Repositories\Admin\AccountRequestRepository;
use App\Repositories\Admin\AttributeRepository;
use App\Repositories\Admin\BannerRepository;
use App\Repositories\Admin\BrandRepository;
use App\Repositories\Admin\CategoryRepository;
use App\Repositories\Admin\GeneralSettingRepository;
use App\Repositories\Admin\OrderRepository;
use App\Repositories\Admin\PaymentRepository;
use App\Repositories\Admin\ProductRepository;
use App\Repositories\Admin\UserProfileRepository;
use App\Repositories\Admin\UserRepository;
use App\Repositories\HomeRepository;
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
        $this->app->bind(AccountRequestInterface::class, AccountRequestRepository::class);
        $this->app->bind(HomeInterface::class, HomeRepository::class);
        $this->app->bind(UserProfileInterface::class, UserProfileRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $general_setting = GeneralSetting::first();
        // config(['general_setting' => $general_setting]);
    }
}
