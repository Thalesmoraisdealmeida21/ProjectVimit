<?php

namespace App\Http\Controllers;

use CodeBot\SenderRequest;
use Illuminate\Http\Request;
use CodeBot\WebHook;
use CodeBot\Build\Solid;

class BotController extends Controller
{
    public function subscribe()
    {
        $subscribe = (new WebHook)->check('a1sd65162sad16as6das1d1as66asd1sad1611');
        if(!$subscribe){
            abort(403, 'Unauthorized action');
        }

        return $subscribe;
    }

    public function receiveMessaging()
    {
        $sender = SenderRequest;
        $senderId = $sender->getSenderId();


        $bot = Solid::factory();
        Solid::pageAccessToken('');
        Solid::setSender($senderId);

        $bot->message('text', 'Hello World');
    }

}
