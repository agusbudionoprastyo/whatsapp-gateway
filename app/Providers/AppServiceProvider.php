<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\isVerifiedLicense;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $propertyExists = property_exists(isVerifiedLicense::class, 'verified');
        if (!$propertyExists) {
            die('error');
        }


        Paginator::useBootstrap();
        Model::preventLazyLoading(true);
    }
}
?>