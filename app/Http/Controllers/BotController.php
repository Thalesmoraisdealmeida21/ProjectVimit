<?php

namespace App\Http\Controllers;

use CodeBot\CallSendApi;
use CodeBot\Element\Button;
use CodeBot\SenderRequest;
use CodeBot\TemplatesMessage\ButtonsTemplate;
use Illuminate\Http\Request;
use CodeBot\WebHook;
use CodeBot\Build\Solid;
use App\usuario;

class BotController extends Controller
{
    private $first = 0;

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
        $message = new ButtonsTemplate($senderId);


        $bot = Solid::factory();
        Solid::pageAccessToken('EAAFP19VlnrIBADsfumDncgn5YWXojvrNmpZBf4OxGVcLsRQOTcJs040a26SsLTIdU1crz1wqa668ZBrQgZBgZBjQJmAO0bfMszqfwP6ABAn9umymH6OPlYeEFvrSzF5mO7f941cCIvYl3fQ3xOUqRy3sZBl9sPFLpXl8SAJzjNwZDZD');
        Solid::setSender($senderId);
        $callSendApi = new CallSendApi('EAAFP19VlnrIBADsfumDncgn5YWXojvrNmpZBf4OxGVcLsRQOTcJs040a26SsLTIdU1crz1wqa668ZBrQgZBgZBjQJmAO0bfMszqfwP6ABAn9umymH6OPlYeEFvrSzF5mO7f941cCIvYl3fQ3xOUqRy3sZBl9sPFLpXl8SAJzjNwZDZD');
        session_start();

            if($postback === 'iniciar'){
                $bot->message("text", 'Ok me diga seu nome para que possamos iniciar a aula ?');
                $_SESSION['idMsg'] = 1;
                $usuario = $sender->getMessage();
                $bot->message('text', $_SESSION['idMsg']);
                $message->add(new Button('postback', 'CIFRAS', 'cifras'));
                $message->add(new Button('postback', 'TABLATURAS', 'tablaturas'));
                $message->add(new Button('postback', 'NOTAS', 'ritmos'));
                $callSendApi->make($message->message('Ola, '. $usuario. 'em que posso lhe ajudar'));


            }else{
                $bot->message('text', @$_SESSION['idMsg']);
                $message->add(new Button('postback', 'Pronto', 'iniciar'));
                $callSendApi->make($message->message('Ola eu sou o VIMIT, seu professor virtual de musicapronto para começar nossa aula  ?'));

            }






















     }

}
