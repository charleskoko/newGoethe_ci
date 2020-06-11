<?php

namespace App\Providers;

use App\Events\NewLoanRequestEvent;
use App\Events\NewUserCreatedEvent;
use App\Listeners\newLoanRequestListener;
use App\Listeners\NewUserCreatedListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NewUserCreatedEvent::class => [
            NewUserCreatedListener::class
        ],
        NewLoanRequestEvent::class => [
            newLoanRequestListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
