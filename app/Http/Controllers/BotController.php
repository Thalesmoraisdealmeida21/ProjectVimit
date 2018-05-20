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
        $mensagem1 = $sender->getMessage();

        $mensagem1= strtoupper($mensagem1);


           /* Possibilidades de CIFRAS*/
            switch($mensagem1){
                case 'LEMBRANÇAS': $bot->message('text', 'cifra da musica LEMBRANÇAS');
                case 'CHALANA': $bot->message('text', 'cifra da musica CHALANA');
                case 'LENHA': $bot->message('text', 'cifra da musica LENHA');
                case 'FLOR': $bot->message('text', 'cifra da musica FLOR');
                case 'DIGA A ELA': $bot->message('text', 'cifra da musica DIGA A ELA');
                case 'TERTULIA': $bot->message('text', 'cifra da musica TERTULIA');
                case 'ERA UMA VEZ': $bot->message('text', 'cifra da musica ERA UMA VEZ');
                case 'BELLA CIAO': $bot->message('text', 'cifra da musica BELLA CIAO');
                case 'LA NA FRONTEIRA': $bot->message('text', 'cifra da musica LA NA FRONTEIRA');
            }




            switch ($sender->getMessage()){
                case 'C': $bot->message('Image', 'https://image.ibb.co/b63qWJ/Screenshot_1.png');
                case 'D': $bot->message('text', 'ainda não programado');
                case 'E': $bot->message('text', 'ainda não programado');
                case 'F': $bot->message('text', 'ainda não programado');
                case 'G': $bot->message('text', 'ainda não programado');
                case 'A': $bot->message('text', 'ainda não programado');
                case 'B': $bot->message('text', 'ainda não programado');
            }


            if($postback === 'iniciar'){
                $bot->message("text", 'Ok vamos começar');
                $message->add(new Button('postback', 'CIFRAS', 'cifras'));
                $message->add(new Button('postback', 'TABLATURAS', 'tablaturas'));
                $message->add(new Button('postback', 'NOTAS', 'ritmos'));
                $callSendApi->make($message->message('em que posso lhe ajudar'));
            }else{
                switch($postback){
                    case 'cifras': $bot->message('text', 'Ok, suponho que você ja saiba alguma coisa mas me diga qual o nivel da cifra que voce quer');
                    $message->add(new Button('postback', 'FACIL', 'easy'));
                    $message->add(new Button('postback', 'MEDIO', 'medium'));
                    $message->add(new Button('postback', 'DIFICIL', 'hard'));
                    $callSendApi->make($message->message('Dificuldades da cifra: '));
                    case 'tablaturas':
                        $bot->message('text', 'Certo então você deseja conhecer um pouco sobre tablaturas eu conheço todas as tablaturas de notas maiores me diga qual delas você não conhece ?');
                        $bot->message('text','C, DO');
                        $bot->message('text','D, RE');
                        $bot->message('text','E, MI');
                        $bot->message('text','F, FA');
                        $bot->message('text','G, SOL');
                        $bot->message('text','A, LA');
                        $bot->message('text','B, SI');
                    case 'easy': $bot->message('text', 'Ok então você está começando a aprender aqui está uma lista das cifdras que eu conheço qual delas lhe chama mais a atenção');
                        $bot->message('text','Chalana');
                        $bot->message('text','Lembranças');
                        $bot->message('text','LENHA');
                    case 'medium': $bot->message('text', 'Beleza, então você ja tem uma caminhada com a musica neste caso veja abaixo algumas cifras um pouco mais avançadas e me diga qual voce quero aprender');
                        $bot->message('text', 'FLOR');
                        $bot->message('text', 'DIGA A ELA');
                        $bot->message('text', 'TERTULIA');
                    case 'hard': $bot->message('text', 'Ok, Então você ja é especialista no assunto veja algumas cifras nivel expert');
                        $bot->message('text','ERA UMA VEZ');
                        $bot->message('text','BELLA CIAO');
                        $bot->message('text','LA NA FRONTEIRA');
                    case '': $bot->message('text', 'Ola eu sou o VIMIT, seu professor virtual de musicapronto para começar nossa aula  ?');
                }
                }


     }

}
