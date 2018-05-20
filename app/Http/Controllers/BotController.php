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
                $bot->message('text', 'F                              C
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
                $bot->message('text', 'Primeira Parte:
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
');
            } else if($mensagem1 === 'LENHA'){
                $bot->message('text', 'Eu não sei dizer,
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
                $bot->message('text', 'Capotraste na 2ª casa
Intro:  F#m

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

Intro: ( F#m )');
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
                $bot->message('text', '        C            G7
(Uma chamarra uma fogueira
        E           F7M
Uma chinoca uma chaleira
       Ebº             C
Uma saudade, um mate amargo
        G7                 C     (bis)
E a peonada repassando o trago
                      G
Noite cheirando a querência
                      C
Das tertúlias do meu pago)


(também pode ser feito da maneira mostrada abaixo)

  Noite  cheiran-do a que-rência  nas ter-túlias do meu pago
|-0--------------------------------------------------1------|
|----1----3-------1-------------------------------1--3---1--|
|------------4-------2----4-------2-------0-------2--2---0--|
|----------------------------5-------4-------2----3--0---2--|
|-3---------------------------------------3--------------3--|
|---------3-------1-------3-------1---------------1---------|


                     G7                       C
Tertúlia é o eco das vozes perdidas no campo afora
                  G7                         C
Cantiga brotando livre novo prenúncio de aurora
   E              F       Ebº               C
É rima sem compromisso julgamento ou castração
                    G7                    C
Onde se marca o compasso no bater do coração

                     G7                     C
É o batismo dos sem nome rodeio dos desgarrados
                    G7                       C
Grito de alerta do pampa tribuna dos injustiçados
    E                 F         Ebº            C
Tertúlia é o canto sonoro sem fronteira ou aramado
                    G7                    C
Onde o violão e o poeta podem chorar abraçados

(intro)');
            } else if($mensagem1 === 'LA NA FRONTEIRA'){
                $bot->message('text', '(intro) D A7 D
Lá donde o campo enfrena o dia, abrindo o peito
                                  A7
No velho jeito de tirar zebú da grota
          Em            Em/D        A/C#
Se ata espora pra um torrão de fundamento
A7                        D
Passando um tento, embaixo do taco da bota


Lá donde o touro mais veiaco tem costeio
            F#m                     Bm
Um par de arreio é ferramenta de valor
        A7               G        D
A vaca xucra esconde a cria na macega
                 A7                       D    (bis)
E cavalhada não nega, que por lá hay domador

              D
/Lá donde as penas se transformam em melodias
                                        A7
Na campeira sinfonia de coscorra e nazarenas
         Em             Em/D       A/C#
Almas antigas rondam galpões nas estâncias
                        A7                           D
Pois são grandes as distâncias e as saudades tão pequenas)

Lá donde ainda ecoa forte um venha, venha
            F#m                     Bm
Chamando a tropa, no reponte das auroras
        A7           G              D
A bagualada segue atrás da égua madrinha
                     A7                         D    (bis)
Na velha estrada da linha, serpenteando tempo afora

           A7                        D
Lá na fronteira, os tajãs por contingêngia
                   A7                             D
Contrabandeiam querência, ora pra um lado ora pra outro
            A7                          D
Se ganha a vida a casco e braço nos varzedos
            A7                          D
Se aprende cedo a ensiná a lida pra um potro

          F#7                          Bm
Lá na fronteira, na amplidão das invernadas
                    E7                           A7
Se termina a campereada, quando o sol apaga as brasas
          G                        D
Então se volta, a trotezito, assoviando
                      A7                          D    (bis)
Pra matear junto da china num jardim defronte as casa

( F#7 Bm E7 A7 G D A7 D G D A7 D )

          G                        D
Então se volta, a trotezito, assoviando
                      A7                          D    (bis)
Pra matear junto da china num jardim defronte as casa');
            }else if($mensagem1 === 'ERA UMA VEZ'){
                $bot->message('text', 'Capotraste na 3ª casa
[Intro] C  C4

[Primeira Parte – Primeira Estrofe]

         C
Era uma vez
                           C4
O dia em que todo dia era bom
      C
Delicioso gosto e o bom gosto
                                C4
Das nuvens serem feitas de algodão

[Primeira Parte – Segunda Estrofe]

          G5
Dava pra ser herói
                                    Am7
No mesmo dia em que escolhia ser vilão
      G5
E acabava tudo em lanche
          F9
Um banho quente
                  C
E talvez um arranhão

[Segunda Parte – Primeira Estrofe]

          C
Dava pra ver
  C9                 F9
A ingenuidade, a inocência

Cantando no tom
            C                       C9
Milhões de mundos e universos tão reais
                       F9
Quanto a nossa imaginação

[Segunda Parte – Segunda Estrofe]

            G5
Bastava um colo, um carinho
                              Am7
E o remédio era beijo e proteção
         G5                       F9
Tudo voltava a ser novo no outro dia
                   C
Sem muita preocupação

[Refrão]

                     F9    G5
É que a gente quer crescer
                           Am7
E, quando cresce, quer voltar do início
                    F9
Porque um joelho ralado
         G5                      Am7
Dói bem menos que um coração partido
                    
                     F9    G5
É que a gente quer crescer
                           Am7
E, quando cresce, quer voltar do início
                    F9
Porque um joelho ralado
         G5                      Am7
Dói bem menos que um coração partido

[Terceira Parte – Primeira Estrofe]

          C
Dá pra viver

Mesmo depois de descobrir 
       C4
Que o mundo ficou mau
          C
É só não permitir 

Que a maldade do mundo
              C4
Te pareça normal

[Terceira Parte – Segunda Estrofe]

            G5
Pra não perder a magia de acreditar
                Am7
Na felicidade real
        G5                    F9
E entender que ela mora no caminho
            C
E não no final

[Refrão]

                     F9    G5
É que a gente quer crescer
                           Am7
E, quando cresce, quer voltar do início
                    F9
Porque um joelho ralado
         G5                      Am7
Dói bem menos que um coração partido
                    
                     F9    G5
É que a gente quer crescer
                           Am7
E, quando cresce, quer voltar do início
                    F9
Porque um joelho ralado
         G5                      Am7
Dói bem menos que um coração partido
         C9
Era uma vez
');
            }else if($mensagem1 === 'BELLA CIAO'){
                $bot->message('text', 'Em
Una mattina mi son svegliato

O bella ciao, bella ciao, bella ciao ciao ciao
        Am               Em
Una mattina mi son svegliato
          B7         Em
Eo ho trovato l\'invasor

        Em
O partigiano porta mi via

O bella ciao, bella ciao, bella ciao ciao ciao
        Am             Em
O partigiano porta mi via
        B7         Em
Che mi sento di morir

          Em
E se io muoio da partigiano

O bella ciao, bella ciao, bella ciao ciao ciao
         Am             Em
E se io muoio da partigiano
       B7         Em
Tu mi devi seppellir

         Em
E seppellire lassù in montagna

O bella ciao, bella ciao, bella ciao ciao ciao
         Am               Em
E seppellire lassù in montagna
        B7               Em
Sotto l\'ombra di un bel fior

Em
E le genti che passeranno

O bella ciao, bella ciao, bella ciao ciao ciao
      Am             Em
E le genti che passeranno
      B7              Em
Mi diranno: "Che bel fior"

             Em
È questo il fiore del partigiano

O bella ciao, bella ciao, bella ciao ciao ciao
             Am             Em
È questo il fiore del partigiano
       B7          Em
Morto per la libertà

             C              Em
È questo il fiore del partigiano
       D          Em
Morto per la libertà');
            }else if(($mensagem1 === 'C') or($mensagem1 === 'DO')){
                $bot->message('image', 'https://i.imgur.com/wdzJ7fw.png');

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
                        }else if($postback === 'tablaturas'){
                            $bot->message('text', 'Muito bem entãoo voce quer conhcer um pouco mais sobre tablaturas me diga qual');
                            $bot->message('text', 'C, DO');
                            $bot->message('text', 'D, RE');
                            $bot->message('text', 'E, MI');
                            $bot->message('text', 'F, FA');
                            $bot->message('text', 'G, SOL');
                            $bot->message('text', 'A, LA');
                            $bot->message('text', 'B, SI');
                        } else {
                            $message->add(new Button('postback', 'pronto', 'iniciar'));
                            $callSendApi->make($message->message('Ola eu sou vimit'));
                        }
                    }
                 }

                }
            }


}
