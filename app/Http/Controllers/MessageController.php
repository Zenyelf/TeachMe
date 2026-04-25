<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(Request $request){
        # send message
    }

    public function getConversation($user_id){
        # chat history
    }

    public function inbox(){
        # list conversations
    }
}
