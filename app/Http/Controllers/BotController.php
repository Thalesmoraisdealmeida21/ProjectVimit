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
        $sender = new SenderRequest;
        $senderId = $sender->getSenderId();
        $keyword  = array('ola', 'tudo bem', 'como vai', 'poderia me ajudar', 'oi');
        $verInicial = 0;


        $bot = Solid::factory();
        Solid::pageAccessToken('EAAFP19VlnrIBADsfumDncgn5YWXojvrNmpZBf4OxGVcLsRQOTcJs040a26SsLTIdU1crz1wqa668ZBrQgZBgZBjQJmAO0bfMszqfwP6ABAn9umymH6OPlYeEFvrSzF5mO7f941cCIvYl3fQ3xOUqRy3sZBl9sPFLpXl8SAJzjNwZDZD');
        Solid::setSender($senderId);


        if($sender->getMessage() == 'Ola'){
            $bot->message('text', 'Ola eu sou o VIMIT !! seu professor virtual de musica, para que eu possa lhe ajudar melhor poderia me dizer qual o seu nome ?');
            $verInicial = 1;
        }
        if($verInicial == 1){
                $usuario = $sender->getMessage();
                $bot->message('text', 'Ola, '. $usuario . 'poderia me dizer também sua idade ?');
         }
     }

}
