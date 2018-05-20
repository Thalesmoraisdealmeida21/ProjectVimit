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
            if($mensagem1 === 'LEMBRANÇAS'){
                $bot->message('text', 'CIFRA LEMBRANÇAS');
            } else if($mensagem1 === 'CHALANA'){
                $bot->message('text', 'CIFRA CHALANA');
            } else if($mensagem1 === 'LENHA'){
                $bot->message('text', 'CIFRA LENHA');
            } else if($mensagem1 === 'FLOR'){
                $bot->message('text', 'CIFRA FLOR');
            } else if($mensagem1 === 'DIGA A ELA'){
                $bot->message('text', 'CIFRA DIGA A ELA');
            }else if($mensagem1 === 'TERTULIA'){
                $bot->message('text', 'CIFRA TERTULIA');
            } else if($mensagem1 === 'LA NA FRONTEIRA'){
                $bot->message('text', 'CIFRA LA NA FRONTEIRA');
            }else if($mensagem1 === 'ERA UMA VEZ'){
                $bot->message('text', 'CIFRA ERA UMA VEZ');
            }else if($mensagem1 === 'BELLA CIAO'){
                $bot->message('text', 'CIFRA BELLA CIAO');
            }



            if($postback === 'iniciar'){
                $bot->message("text", 'Ok vamos começar');
                $message->add(new Button('postback', 'CIFRAS', 'cifras'));
                $message->add(new Button('postback', 'TABLATURAS', 'tablaturas'));
                $message->add(new Button('postback', 'NOTAS', 'ritmos'));
                $callSendApi->make($message->message('em que posso lhe ajudar'));
            }else{
                if($postback === 'cifras'){
                    $bot->message('text', 'Ok, suponho que você ja saiba alguma coisa mas me diga qual o nivel da cifra que voce quer');
                    $message->add(new Button('postback', 'FACIL', 'easy'));
                    $message->add(new Button('postback', 'MEDIO', 'medium'));
                    $message->add(new Button('postback', 'DIFICIL', 'hard'));
                    $callSendApi->make($message->message('Dificuldades da cifra: '));
                }else{
                    if($postback === 'easy'){
                        $bot->message('text', 'Certo, então voce está arrecem começando veja algumas das cifras que eu posso lhe ajudar ?');
                        $bot->message('text','LEMBRANÇAS');
                        $bot->message('text','CHALANA');
                        $bot->message('text','LENHA');
                    }else if($postback === 'medium'){
                        $bot->message('text', 'Certo, então voce ja sabe alguma coisa veja então algumas cifras maix complexas um pouco ?');
                        $bot->message('text','flor');
                        $bot->message('text','diga a ela');
                        $bot->message('text','tertulia');
                    } else if($postback === 'hard'){
                        $bot->message('text', 'Muito bem, então você ja é um expert veja algumas cifras mais avancadas');
                        $bot->message('text','era uma vez');
                        $bot->message('text','bella ciao');
                        $bot->message('text','la na fronteira');
                    } else {
                        $message->add(new Button('postback', 'pronto', 'iniciar'));
                        $callSendApi->make($message->message('Ola eu sou vimit'));
                    }
                }


            }



     }

}
