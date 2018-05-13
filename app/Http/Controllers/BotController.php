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
        $nomeUser = '';
        session_start();


        $bot = Solid::factory();
        Solid::pageAccessToken('EAAFP19VlnrIBADsfumDncgn5YWXojvrNmpZBf4OxGVcLsRQOTcJs040a26SsLTIdU1crz1wqa668ZBrQgZBgZBjQJmAO0bfMszqfwP6ABAn9umymH6OPlYeEFvrSzF5mO7f941cCIvYl3fQ3xOUqRy3sZBl9sPFLpXl8SAJzjNwZDZD');
        Solid::setSender($senderId);
        $callSendApi = new CallSendApi('EAAFP19VlnrIBADsfumDncgn5YWXojvrNmpZBf4OxGVcLsRQOTcJs040a26SsLTIdU1crz1wqa668ZBrQgZBgZBjQJmAO0bfMszqfwP6ABAn9umymH6OPlYeEFvrSzF5mO7f941cCIvYl3fQ3xOUqRy3sZBl9sPFLpXl8SAJzjNwZDZD');
        $bot->message($postback);



        if($postback === 'iniciar'){
            $usuario = new usuario\Usuario();
            $bot->message('text','Certo, mas antes de prosseguirmo para que eu possa lhe ajudar melhor poderia me dizer seu nome ?');
            $_SESSION['idMensagem'] = 1;
        }else {
            $message->add(new Button('postback', 'Pronto', 'iniciar'));
            $callSendApi->make($message->message('Ola eu sou o VIMIT, seu professor virtual de musicapronto para começar nossa aula  ?'));
        }

        if($_SESSION['idMensagem'] === 1){
            $bot->message('text','Ola, '. $sender->getMessage() . 'em que posso ajudalo ?');
        }




















     }

}
