<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
        Activity::class => \App\Policies\ActivityPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('delete-activity', function(User $user, Activity $activity){
            return $user->isCreator($user, $activity) ? Response::allow() : Response::deny('You do not have an access.');
        });
    }
}
