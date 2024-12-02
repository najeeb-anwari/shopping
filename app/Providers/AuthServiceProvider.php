<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use \App\Models\User;
use \App\Models\Role;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Product' => 'App\Policies\ProductPolicy',
        'App\Models\Category' => 'App\Policies\CategoryPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('modify_products', fn(User $user) => $user->role_id == Role::IS_SELLER);
        Gate::define('modify_categories', fn(User $user) => $user->role_id == Role::IS_ADMIN);
        Gate::define('modify_cart', fn(User $user) => $user->role_id == Role::IS_BUYER);
        Gate::define('seller_access', fn(User $user) => $user->role_id == Role::IS_SELLER);
        Gate::define('admin_access', fn(User $user) => $user->role_id == Role::IS_ADMIN);
        Gate::define('buyer_access', fn(User $user) => $user->role_id == Role::IS_BUYER);
    }
}
