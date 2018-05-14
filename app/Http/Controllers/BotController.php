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



            switch($sender->getMessage()){
                case 'LEMBRANÇAS': $bot->message('text', 'Intro: F  C  Bb  C  F

F                              C
Quando as almas perdidas se encontram
                       F
Machucadas pelo desprazer
    Bb      F                C
Um aceno um riso apenas
                       F
Da vontade da gente viver
                            C
São os velhos mistérios da vida
                         Bb
Rebenquiados pelo dia-a-dia

      F                     C
Já cansados de tanta tristeza
                          F
Vão em busca de nova alegria (2x)

Solo: F  C  Bb  C  F

F                          C
E ao morrer desta tarde morena
                           F
Quando o sol despacito se vai
      Bb            F           C
As lembranças tranqueiam com as águas
                        F
Passageiras do rio Uruguai
                          C
E as guitarras eternas cigarras
                             Bb
Entre as flores dos velhos ipês

        F                    C
Sempre vivas dormidas se acordam
                          F
Na lembrança da primeira vez

        Bb                 C
Sempre vivas dormidas se acordam
                          F
Na lembrança da primeira vez.');
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
                if($postback === 'cifras'){
                    $bot->message('text', 'Ok, suponho que você ja saiba alguma coisa mas me diga qual o nivel da cifra que voce quer');
                    $message->add(new Button('postback', 'FACIL', 'easy'));
                    $message->add(new Button('postback', 'MEDIO', 'medium'));
                    $message->add(new Button('postback', 'DIFICIL', 'hard'));
                    $callSendApi->make($message->message('Dificuldades da cifra: '));
                }else{
                        $message->add(new Button('postback', 'Pronto', 'iniciar'));
                        $callSendApi->make($message->message('Ola eu sou o VIMIT, seu professor virtual de musicapronto para começar nossa aula  ?'));
                    }
                    switch($postback){
                        case 'easy': $bot->message('text', 'Ok então você arrecem aprender aqui está uma lista das cifdras que eu conheço qual delas lhe chama mais a atenção');
                        $bot->message('text','Chalana');
                        $bot->message('text','Lembranças');
                        $bot->message('text','Musica exemplo');
                    }
                    if($postback === 'tablaturas'){
                        $bot->message('text', 'Certo então você deseja conhecer um pouco sobre tablaturas eu conheço todas as tablaturas de notas maiores me diga qual delas você não conhece ?');
                        $bot->message('text','C, DO');
                        $bot->message('text','D, RE');
                        $bot->message('text','E, MI');
                        $bot->message('text','F, FA');
                        $bot->message('text','G, SOL');
                        $bot->message('text','A, LA');
                        $bot->message('text','B, SI');
                    }


                }


     }

}
