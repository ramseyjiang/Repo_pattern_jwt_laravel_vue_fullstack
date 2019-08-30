<?php

namespace Rspa\Providers;

use Illuminate\Support\ServiceProvider;
use Rspa\Contracts\Repositories\UserRepositoryContract;
use Rspa\Contracts\Services\UserServiceContract;
use Rspa\Repositories\UserRepository;
use Rspa\Services\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryContract::class, UserRepository::class);
        $this->app->bind(UserServiceContract::class, UserService::class);
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
