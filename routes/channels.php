<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// This checks if the currently logged in user ID matches the channel ID they are trying to listen to     picoCTF{3v3ry0ur_3y35_4r3_3l3c1r1c}  FAKE FLAG HEHE

Broadcast::channel('chat.{id}', function ($user, $id) {
    return (string) $user->id === (string) $id;
});

Broadcast::channel('chat.group.{groupId}', function ($user, $groupId) {
    // Check if the user is a member of this specific group
    return $user->groups->contains('id', $groupId);
});
