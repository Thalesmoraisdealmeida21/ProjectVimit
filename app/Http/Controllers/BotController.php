<?php

namespace App\Http\Controllers;

use CodeBot\CallSendApi;
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
        $callSendApi = new CallSendApi('EAAFP19VlnrIBADsfumDncgn5YWXojvrNmpZBf4OxGVcLsRQOTcJs040a26SsLTIdU1crz1wqa668ZBrQgZBgZBjQJmAO0bfMszqfwP6ABAn9umymH6OPlYeEFvrSzF5mO7f941cCIvYl3fQ3xOUqRy3sZBl9sPFLpXl8SAJzjNwZDZD')
        $idade = 0;

        $bot = Solid::factory();
        Solid::setSender($senderId);
        $message = new ButtonsTemplate($senderId);


       if ($postback === 'abrir_site') {
           $message->add(new Button('web_url', 'Google', 'https://www.google.com.br'));
           $callSendApi->make($message->message('Que tal testarmos a abertura de um site?'));
       } else if ($postback === 'outro_fluxo') {
           $message->add(new Button('postback', 'Abrir site', 'abrir_site'));
           $callSendApi->make($message->message('Legal, né, vamos tentar uma pesquisa?'));
       } else {
           $message->add(new Button('postback', 'Botão 1', 'abrir_site'));
           $message->add(new Button('postback', 'Botão 2', 'abrir_site'));
           $message->add(new Button('postback', 'Botão 3', 'abrir_site'));
           $callSendApi->make($message->message('Vamos testar um postback'));
           $message = new ButtonsTemplate($senderId);
           $message->add(new Button('postback', 'Botão 4', 'outro_fluxo'));
           $message->add(new Button('postback', 'Botão 5', 'outro_fluxo'));
           $message->add(new Button('postback', 'Botão 6', 'outro_fluxo'));
           $callSendApi->make($message->message('Mais algumas opções'));
       }










     }

}
