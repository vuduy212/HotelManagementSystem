<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\UserPolicy;
use App\Policies\RoomPolicy;
use App\Policies\RoomCategoryPolicy;
use App\Policies\RoomStatusPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->userPolicies();
        $this->roomPolicies();
        $this->roomCategoryPolicies();
        $this->roomStatusPolicies();
    }

    public function userPolicies()
    {
        Gate::define("user.index", [UserPolicy::class, "index"]);
        Gate::define("user.create", [UserPolicy::class, "create"]);
        Gate::define("user.view", [UserPolicy::class, "view"]);
        Gate::define("user.update", [UserPolicy::class, "update"]);
        Gate::define("user.delete", [UserPolicy::class, "delete"]);
    }

    public function roomPolicies()
    {
        Gate::define("room.index", [RoomPolicy::class, "index"]);
        Gate::define("room.create", [RoomPolicy::class, "create"]);
        Gate::define("room.view", [RoomPolicy::class, "view"]);
        Gate::define("room.update", [RoomPolicy::class, "update"]);
        Gate::define("room.delete", [RoomPolicy::class, "delete"]);
    }

    public function roomCategoryPolicies()
    {
        Gate::define("category.index", [RoomCategoryPolicy::class, "index"]);
        Gate::define("category.create", [RoomCategoryPolicy::class, "create"]);
        Gate::define("category.view", [RoomCategoryPolicy::class, "view"]);
        Gate::define("category.update", [RoomCategoryPolicy::class, "update"]);
        Gate::define("category.delete", [RoomCategoryPolicy::class, "delete"]);
    }

    public function roomStatusPolicies()
    {
        Gate::define("status.index", [RoomStatusPolicy::class, "index"]);
        Gate::define("status.create", [RoomStatusPolicy::class, "create"]);
        Gate::define("status.view", [RoomStatusPolicy::class, "view"]);
        Gate::define("status.update", [RoomStatusPolicy::class, "update"]);
        Gate::define("status.delete", [RoomStatusPolicy::class, "delete"]);
    }
}
