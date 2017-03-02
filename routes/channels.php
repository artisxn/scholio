<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
 */

/*
 * Authenticate the user's personal channel...
 */
Broadcast::channel('App.User.*', function ($user, $userId) {
    return (int) $user->id === (int) $userId;
});

Broadcast::channel('school.*', function ($user) {
    return $user;
});
