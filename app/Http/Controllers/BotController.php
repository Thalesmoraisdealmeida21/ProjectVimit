<?php

namespace App\Http\Controllers;

use CodeBot\Element\Button;
use CodeBot\SenderRequest;
use CodeBot\TemplatesMessage\ButtonsTemplate;
use Illuminate\Http\Request;
use CodeBot\WebHook;
use CodeBot\Build\Solid;

class BotController extends Controller
{
    private $first = false;
    private $usuario = '';

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
        $postback = $sender->getPostback();
        $keyword  = array('ola', 'tudo bem', 'como vai', 'poderia me ajudar', 'oi');
        $message = new ButtonsTemplate($senderId);

        $bot = Solid::factory();
        Solid::pageAccessToken('EAAFP19VlnrIBADsfumDncgn5YWXojvrNmpZBf4OxGVcLsRQOTcJs040a26SsLTIdU1crz1wqa668ZBrQgZBgZBjQJmAO0bfMszqfwP6ABAn9umymH6OPlYeEFvrSzF5mO7f941cCIvYl3fQ3xOUqRy3sZBl9sPFLpXl8SAJzjNwZDZD');
        Solid::setSender($senderId);

        if(!$this->first){
            $bot->message('text', 'ola eu sou o vimit, por favor seu nome: ');
            $this->first = true;
        }else{
            if($this->usuario === '')
            $this->usuario = $sender->getMessage();
            $bot->message('text', 'Ola '. $this->usuario);
         }





     }

}
