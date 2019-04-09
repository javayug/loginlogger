<?php

namespace Thekavish\Loginlogger\Listeners;

use Illuminate\Events\Dispatcher;

class LoginEventSubscriber
{
    /**
     * Handle successful user login events.
     */
    public function onUserLoginPassed($event)
    {
        debug($event);
    }

    /**
     * Handle failed user login events.
     */
    public function onUserLoginFailed($event)
    {
    }

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event)
    {
        debug($event);
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Authenticated',
            'Thekavish\LoginLogger\Listeners\LoginEventSubscriber@onUserLoginPassed'
        );

        $events->listen(
            'Illuminate\Auth\Events\Failed',
            'Thekavish\LoginLogger\Listeners\LoginEventSubscriber@onUserLoginFailed'
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'Thekavish\LoginLogger\Listeners\LoginEventSubscriber@onUserLogout'
        );
    }

}