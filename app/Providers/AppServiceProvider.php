<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
<<<<<<< HEAD
=======

        if (env('APP_ENV') == 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }
>>>>>>> 3d114c284310e2513437445e6a0970b753349ca8

        Model::unguard();

        Gate::define('delete-job', function(User $user, Job $job){
            return $job->employer->user->is($user);
        });


    }
}
