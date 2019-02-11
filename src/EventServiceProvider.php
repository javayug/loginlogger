<?php

namespace Thekavish\Loginlogger;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        'Thekavish\Loginlogger\Listeners\LoginEventSubscriber',
    ];
}
