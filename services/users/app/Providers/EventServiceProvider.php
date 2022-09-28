<?php

namespace App\Providers;

use App\Jobs\TestJob;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    /**
     * Register any events for your application.
     *
     */
    public function boot()
    {
        $this->app->bind(TestJob::class . '@handle', fn($job) => $job->handle());
    }

}
