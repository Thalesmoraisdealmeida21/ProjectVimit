<?php

namespace App\Http\Controllers;

$lembranças =  'Intro: F  C  Bb  C  F

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
Na lembrança da primeira vez.';


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
                $bot->message('text', 'Intro: F  C  Bb  C  F

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
            } else if($mensagem1 === 'CHALANA'){
                $bot->message('text', 'Intro:

Primeira Parte:
    D
Lá vai uma chalana
     A7(13)   D
Bem longe se vai
Navegando no remanso
             A7
Do rio Paraguai

Refrão:
G
Oh! Chalana sem querer
 D
Tu aumentas minha dor
 A7
Nessas águas tão serenas
                  D
Vai levando meu amor
G
Oh! Chalana sem querer
 D
Tu aumentas minha dor
 A7(13)
Nessas águas tão serenas
                  D
Vai levando meu amor

Segunda Parte:
             
E assim ela se foi
                    A7(13)
Nem de mim se despediu
  G
A   chalana vai sumindo
    A7          D
Na curva lá do rio

E se ela vai magoada
                      A7
Eu bem sei que tem razão

Fui ingrato
                         D
Eu feri o seu meigo coração

Refrão:
G
Oh! Chalana sem querer
 D
Tu aumentas minha dor
 A7(13)
Nessas águas tão serenas
                  D
Vai levando meu amor
G
Oh! Chalana sem querer
 D
Tu aumentas minha dor
 A7
Nessas águas tão serenas
                  D
Vai levando meu amor

Solo:

(Primeira Parte)

(Refrão)');
            } else if($mensagem1 === 'LENHA'){
                $bot->message('text', '(intro 2x) C   G   F   C

              G
Eu não sei dizer,
              F
O que quer dizer,
             C
O que vou dizer,
          G
Eu amo você,
                F
Mas não sei o que,
             C
Isso quer dizer.


                 G
Eu não sei por que,
               F
Eu teimo em dizer,
           C
Que amo você,
                 G
Se eu não sei dizer,
              F
O que quer dizer,
             C
O que vou dizer.

            G
Se eu digo pare,
            F
Você não repare,
              C
No que possa parecer,
            G
Se eu digo siga,
                   F
O que quer que eu diga,
                   C
Você não vai entender.

(Refrão - 2x):
                G
Mas se eu digo venha
             F
Você traz a lenha
             C
Pro meu fogo acender

( G F C )  (2x)

            G
Se eu digo pare
            F
Você não repare
              C
No que possa parecer
            G
Se eu digo siga
                   F
O que quer que eu diga
                   C
Você não vai entender

(refrão 6x)
                G
Mas se eu digo venha
             F
Você traz a lenha
             C
Pro meu fogo acender...');
            } else if($mensagem1 === 'FLOR'){
                $bot->message('text', '  F#m       D5(9)
Flor, Oh Uh Oh!
      A5(9)      E
Oh Uh Oh!  Oh Uh Oh!

Estrofes:
  F#m           E
Flor, pra onde foi você, flor
F#m             E        D5(9)
    Com seu perfume de amor
                A5(9)   E
O que é que eu fiz de ruim
 F#m      E
Eu não achei outra flor

F#m          E        D5(9)
    Com a beleza e a cor
         A5(9)    E
Que tem você pra mim
 F#m                  D
Deus fez a terra e o céu
                  A
Fez você e o seu mel
                     E
E me fez só pra te amar
 Bm                D
Eu sou o seu colibri
                A
Te esperando aqui
                E
Flor pra te beijar

Refrão:
A                    E
  Meu coração é regador de flor
      Bm                    F#m  E
Te regando amor cê vai me amar
A                    E
  Meu coração é regador de amor
      Bm                    D5(9)  E
Te regando flor cê vai me amar

  F#m       D5(9)
Flor, Oh Uh Oh!
      A5(9)      E
Oh Uh Oh!  Oh Uh Oh!

Estrofes:
  F#m           E
Flor, pra onde foi você, flor
F#m             E        D5(9)
    Com seu perfume de amor
                A5(9)   E
O que é que eu fiz de ruim
 F#m      E
Eu não achei outra flor
F#m          E        D5(9)
    Com a beleza e a cor
         A5(9)    E
Que tem você pra mim
 F#m                  D
Deus fez a terra e o céu
                  A
Fez você e o seu mel
                     E
E me fez só pra te amar
 Bm                D
Eu sou o seu colibri
                A
Te esperando aqui
                E
Flor pra te beijar

Refrão:
A                    E
  Meu coração é regador de flor
      Bm                    F#m  E
Te regando amor cê vai me amar
A                    E
  Meu coração é regador de amor
      Bm                    D5(9)  E
Te regando flor cê vai me amar

Intro: ( F#m )
');
            } else if($mensagem1 === 'DIGA A ELA'){
                $bot->message('text', 'G                    Am D
   Diga a ela que você me viu
G               Am   D
   Que eu parecia muito bem
G                 Am             D
   Apesar de tantas noites vazias
Em                  A      C
   Tantas madrugadas vendo tv
      G           F      Em
   Na verdade, dias intermináveis
G                  Am     D
   Diga a ela que me viu num bar
G                  Am     D
   E eu estava com uns amigos
G                  Am     D          Em
   Apesar de eu conhecer quem me rodeia
       A                 C
   Tantos estranhos tão perto
      G            F  Em
   Na verdade, longe do principal
C        G            D  Em
   Diga a ela que me viu sozinho
C          G      D           Em
   Diga que ela sabe onde eu estou
C        G       D       Em   
   Diga a ela que me viu sozinho
         C     Em         A
   Ela sabe onde eu estou
Intro 

G                  Am     D
   Diga a ela que me viu na rua
G                 Am        D
   Que eu caminhava muito devagar
G                  Am     D            Em
   Que eu olhava para todos para enxergar
                 A          C
   Tanto espaço dentro de mim
G                F           Em
   Na verdade, ela sabe quem eu sou
C        G            D  Em
   Diga a ela que me viu sozinho
C          G      D           Em
   Diga que ela sabe onde eu estou
C        G       D       Em   
   Diga a ela que me viu sozinho
         C     Em         A
   Ela sabe onde eu estou');
            }else if($mensagem1 === 'TERTULIA'){
                $bot->message('text', 'CIFRA TERTULIA');
            } else if($mensagem1 === 'LA NA FRONTEIRA'){
                $bot->message('text', 'CIFRA LA NA FRONTEIRA');
            }else if($mensagem1 === 'ERA UMA VEZ'){
                $bot->message('text', 'CIFRA ERA UMA VEZ');
            }else if($mensagem1 === 'BELLA CIAO'){
                $bot->message('text', 'CIFRA BELLA CIAO');
            }else{
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


}
