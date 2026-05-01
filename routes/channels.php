<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// This checks if the currently logged in user ID matches the channel ID they are trying to listen to
Broadcast::channel('chat.{id}', function ($user, $id) {
    return (string) $user->id === (string) $id;
});