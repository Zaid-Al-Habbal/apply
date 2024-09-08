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
    public function boot(UrlGenerator $url): void
    {
        //

        if (env('APP_ENV') == 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }
        
        Model::unguard();

        Gate::define('delete-job', function(User $user, Job $job){
            return $job->employer->user->is($user);
        });


    }
}
