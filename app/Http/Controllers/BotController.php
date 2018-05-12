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
    private $first = 0;
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
        $idade = 0;

        $bot = Solid::factory();
        Solid::pageAccessToken('EAAFP19VlnrIBADsfumDncgn5YWXojvrNmpZBf4OxGVcLsRQOTcJs040a26SsLTIdU1crz1wqa668ZBrQgZBgZBjQJmAO0bfMszqfwP6ABAn9umymH6OPlYeEFvrSzF5mO7f941cCIvYl3fQ3xOUqRy3sZBl9sPFLpXl8SAJzjNwZDZD');
        Solid::setSender($senderId);
        $bot->message('text', $this->first);
        if($sender->getMessage() === 'Ola'){
            $bot->message('text', 'ola eu sou o VIMIT, seu professor virtual de musica por favor me diga seu nome para que eu possa lhe ajudar ? ');
        }else{
            $this->usuario = $sender->getMessage();
            $bot->message('text', 'Ola '. $this->usuario. ' poderia me dizer sua idade ?');
            if($sender->getMessage() > 0){
                $idade = $sender->getMessage();
            }else{
                $bot->message('text', 'Hmmm Acho que essa não é sua idade poderia dizer novamente');
            }

         }





     }

}
