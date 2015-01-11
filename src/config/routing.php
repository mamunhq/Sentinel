<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Default Routing
    |--------------------------------------------------------------------------
    |
    | Sentinel provides default routes for its sessions, users and groups.
    | You can use them as is, or you can disable them entirely.
    |
    */

    'routes_enabled'               => true,

    /*
    |--------------------------------------------------------------------------
    | URL Redirection
    |--------------------------------------------------------------------------
    |
    | When the Sentinel Controller methods are complete, they will redirect
    | the browser to the url, route or action specified here. If no
    | action is specified, a raw JSON response will be returned.
    |
    */

    'session.store'                => ['route' => 'home'],
    'session.destroy'              => ['action' => 'Sentinel\SessionController@create'],
    'registration.complete'        => ['route' => 'home'],
    'registration.activated'       => ['route' => 'home'],
    'registration.resend'          => ['route' => 'home'],
    'registration.reset.triggered' => ['route' => 'home'],
    'registration.reset.invalid'   => ['route' => 'home'],
    'registration.reset.complete'  => ['route' => 'home'],
    'users.invalid'                => ['route' => 'home'],
    'users.store'                  => ['route' => 'sentinel.users.index'],
    'users.update'                 => ['route' => 'sentinel.users.show', 'parameters' => ['user' => 'id']],
    'users.destroy'                => ['route' => 'sentinel.users.index'],
    'users.change.password'        => ['route' => 'sentinel.users.show', 'parameters' => ['user' => 'id']],
    'users.change.memberships'     => ['route' => 'sentinel.users.show', 'parameters' => ['user' => 'id']],
    'users.suspend'                => ['route' => 'sentinel.users.index'],
    'users.unsuspend'              => ['route' => 'sentinel.users.index'],
    'users.ban'                    => ['route' => 'sentinel.users.index'],
    'users.unban'                  => ['route' => 'sentinel.users.index'],
    'groups.store'                 => ['route' => 'sentinel.groups.index'],
    'groups.update'                => ['route' => 'sentinel.groups.index'],
    'groups.destroy'               => ['route' => 'sentinel.groups.index'],

);