<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $this->customIfStatementAdmin();
        $this->customIfStatementReceptionist();
        $this->customIfStatementRoomManager();
    }

    public function customIfStatementAdmin()
    {
        Blade::if('admin', function () {
            return auth()->user()->hasRole(['admin']);
        });
    }

    public function customIfStatementReceptionist()
    {
        Blade::if('receptionist', function () {
            return auth()->user()->hasRole(['receptionist']);
        });
    }

    public function customIfStatementRoomManager()
    {
        Blade::if('room_manager', function () {
            return auth()->user()->hasRole(['room_manager']);
        });
    }
}
