<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('manage-prodi', function($user) {
            return $user->userable_type === User::TYPE_ADMIN;
        });

        $gate->define('manage-makul', function($user) {
            return $user->userable_type === User::TYPE_ADMIN;
        });

        $gate->define('pilih-makul', function($user) {
            return $user->userable_type === User::TYPE_DOSEN;
        });

        $gate->define('vote-makul', function($user) {
            return $user->userable_type === User::TYPE_MAHASISWA;
        });
    }
}
