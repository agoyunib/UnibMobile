<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isAdmin', function ($admin) {
            return $admin->role == 'Admin';
        });

        Gate::define('isFakultas', function ($admin) {
            return $admin->role == 'Fakultas';
        });

        Gate::define('isProdi', function ($admin) {
            return $admin->role == 'Prodi';
        });
    }
}
