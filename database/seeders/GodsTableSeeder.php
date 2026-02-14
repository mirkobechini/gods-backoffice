<?php

namespace Database\Seeders;

use App\Models\God;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gods = [
            [
                "name" => "Zeus",
                "title" => "Re degli Dei",
                "image" => "gods-thumb/zeus.svg",
                "description" => "Zeus è il re degli dei e il dio del cielo, del tuono e dei fulmini nella mitologia greca. È uno dei dodici dei dell'Olimpo ed è considerato il più potente di tutti gli dei. Zeus è spesso rappresentato con una folgore in mano e un'aquila ai suoi piedi, simboli del suo potere e della sua autorità. È anche noto per le sue numerose avventure amorose e per essere il padre di molti dei e eroi della mitologia greca.",
                "rank" => 10,
                "pantheon_id" => 1,
            ],
            [
                "name" => "Thor",
                "title" => "Dio del Tuono",
                "image" => "gods-thumb/thor.svg",
                "description" => "Thor è il dio del tuono, della forza e della protezione nella mitologia norrena. È uno dei principali dei del pantheon norreno ed è considerato un potente guerriero e protettore degli uomini. Thor è spesso rappresentato con un martello chiamato Mjolnir, che è un'arma magica in grado di distruggere tutto ciò che colpisce. È anche noto per le sue avventure e per essere il figlio di Odino, il re degli dei norreni.",
                "rank" => 9,
                "pantheon_id" => 2,
            ],
            [
                "name" => "Amaterasu",
                "title" => "Dea del Sole",
                "image" => "gods-thumb/amaterasu.svg",
                "description" => "Amaterasu è la dea del sole e della luce nella mitologia giapponese. È una delle principali divinità del pantheon shintoista ed è considerata la progenitrice della famiglia imperiale giapponese. Amaterasu è spesso rappresentata come una donna radiosa e luminosa, simbolo del sole e della luce. È anche nota per la sua storia di nascondersi in una caverna, causando l'oscurità nel mondo, e per essere stata persuasa a uscire da altre divinità con l'uso di specchi e musica, riportando così la luce nel mondo.",
                "rank" => 8,
                "pantheon_id" => 3,
            ],
            [
                "name" => "Ares",
                "title" => "Dio della Guerra",
                "image" => "gods-thumb/ares.svg",
                "description" => "Ares è il dio della guerra e della battaglia nella mitologia greca. È uno dei dodici dei dell'Olimpo ed è spesso rappresentato come un guerriero armato, pronto a combattere. Ares è noto per essere impulsivo, aggressivo e sanguinario, e non è molto amato dagli altri dei o dagli uomini. Nonostante la sua natura violenta, Ares è anche considerato un protettore dei soldati e dei guerrieri, e viene invocato in battaglia per ottenere forza e protezione.",
                "rank" => 7,
                "pantheon_id" => 1,
            ],
            [
                "name" => "Freyja",
                "title" => "Dea dell'Amore e della Fertilità",
                "image" => "gods-thumb/freyja.svg",
                "description" => "Freyja è la dea dell'amore, della fertilità e della bellezza nella mitologia norrena. È una delle principali divinità del pantheon norreno ed è considerata una potente dea che governa su vari aspetti della vita umana. Freyja è spesso rappresentata come una donna bellissima e seducente, simbolo dell'amore e della bellezza. È anche nota per essere una dea guerriera, che guida le anime dei guerrieri caduti in battaglia al Valhalla, il paradiso dei guerrieri norreni.",
                "rank" => 6,
                "pantheon_id" => 2,
            ],
            [
                "name" => "Susanoo",
                "title" => "Dio delle Tempeste e del Mare",
                "image" => "gods-thumb/susanoo.svg",
                "description" => "Susanoo è il dio delle tempeste, del mare e della tempesta nella mitologia giapponese. È una delle principali divinità del pantheon shintoista ed è considerato un dio potente e imprevedibile. Susanoo è spesso rappresentato come un uomo forte e tempestoso, simbolo delle tempeste e del mare. È anche noto per le sue avventure e per essere il fratello di Amaterasu, la dea del sole, con cui ha avuto una relazione complicata, che ha portato a conflitti e riconciliazioni tra i due dei.",
                "rank" => 7,
                "pantheon_id" => 3,
            ],
            [
                "name" => "Poseidone",
                "title" => "Dio del Mare",
                "image" => "gods-thumb/poseidone.svg",
                "description" => "Poseidone è il dio del mare, dei terremoti e dei cavalli nella mitologia greca. Fratello di Zeus e Ade, governa gli oceani con il suo tridente, simbolo del suo immenso potere. È una divinità temuta e rispettata, capace di scatenare tempeste devastanti o calmare le acque per favorire i naviganti. Nella tradizione greca è spesso rappresentato come un dio maestoso e irascibile, legato profondamente alla forza incontrollabile della natura.",
                "rank" => 8,
                "pantheon_id" => 1,
            ],
            [
                "name" => "Iside",
                "title" => "Dea della Magia e della Fertilità",
                "image" => "gods-thumb/iside.svg",
                "description" => "Iside è la dea della magia, della fertilità e della maternità nella mitologia egizia. È una delle principali divinità del pantheon egizio ed è considerata una dea potente e benevola. Iside è spesso rappresentata come una donna con un trono sulla testa, simbolo del suo ruolo di regina degli dei. È anche nota per essere la madre di Horus, il dio falco, e per essere stata una dea protettrice dei morti e dei defunti nell'aldilà egizio.",
                "rank" => 8,
                "pantheon_id" => 4,
            ],
                [
                    "name" => "Shiva",
                    "title" => "Dio della Distruzione e della Trasformazione",
                    "image" => "gods-thumb/shiva.svg",
                    "description" => "Shiva è il dio della distruzione, della trasformazione e della rinascita nella mitologia induista. È una delle principali divinità del pantheon induista ed è considerato un dio potente e complesso. Shiva è spesso rappresentato come un uomo con tre occhi, simbolo della sua saggezza e conoscenza, e con una falce in mano, simbolo del suo potere di distruzione. È anche noto per essere un dio ascetico, che vive in meditazione sulle montagne dell'Himalaya, e per essere il marito di Parvati, la dea della bellezza e dell'amore.",
                    "rank" => 9,
                    "pantheon_id" => 5,
                ],
                 [
                    "name" => "Guandi",
                    "title" => "Dio della Guerra e della Giustizia",
                    "image" => "gods-thumb/guandi.svg",
                    "description" => "Guandi è il dio della guerra, della giustizia e della protezione nella mitologia cinese. È una delle principali divinità del pantheon cinese ed è considerato un dio potente e rispettato. Guandi è spesso rappresentato come un uomo con una lunga barba, vestito con armatura da guerriero, simbolo del suo ruolo di protettore e difensore della giustizia. È anche noto per essere stato un generale storico, che è stato deificato per le sue gesta eroiche e la sua lealtà al suo sovrano.",
                    "rank" => 7,
                    "pantheon_id" => 6,
                ],
                [
                    "name" => "Hades",
                    "title" => "Dio degli Inferi",
                    "image" => "gods-thumb/hades.svg",
                    "description" => "Hades è il dio degli inferi e dei morti nella mitologia greca. Fratello di Zeus e Poseidone, governa il regno dei morti con severità e giustizia. Hades è spesso rappresentato come un dio oscuro e imponente, simbolo del potere sulla morte e sull'aldilà. Nonostante la sua natura temuta, Hades è anche considerato un dio giusto, che accoglie le anime dei defunti nel suo regno e garantisce loro una giusta ricompensa o punizione in base alle loro azioni durante la vita.",
                    "rank" => 9,
                    "pantheon_id" => 1,
                ],
                    [
                        "name" => "Loki",
                        "title" => "Dio dell'Inganno e del Caos",
                        "image" => "gods-thumb/loki.svg",
                        "description" => "Loki è il dio dell'inganno, del caos e della malizia nella mitologia norrena. È una delle principali divinità del pantheon norreno ed è considerato un dio complesso e ambivalente. Loki è spesso rappresentato come un uomo astuto e imprevedibile, simbolo dell'inganno e del caos. È anche noto per le sue avventure e per essere il padre di mostri come Fenrir, il lupo gigante, e Jormungandr, il serpente di Midgard, che sono destinati a causare distruzione durante il Ragnarok, la fine del mondo nella mitologia norrena.",
                        "rank" => 6,
                        "pantheon_id" => 2,
                    ],
                    [   
                        "name" => "Ra",
                        "title" => "Dio del Sole",
                        "image" => "gods-thumb/ra.svg",
                        "description" => "Ra è il dio del sole e della luce nella mitologia egizia. È una delle principali divinità del pantheon egizio ed è considerato un dio potente e benevolo. Ra è spesso rappresentato come un uomo con la testa di falco, simbolo del sole e della luce, e con un disco solare sulla testa, simbolo del suo potere. È anche noto per essere il creatore del mondo e per essere stato venerato come il dio più importante dell'antico Egitto.",
                        "rank" => 10,
                        "pantheon_id" => 4,
                    ],
                     [
                        "name" => "Kali",
                        "title" => "Dea della Distruzione e della Rinascita",
                        "image" => "gods-thumb/kali.svg",
                        "description" => "Kali è la dea della distruzione, della rinascita e della trasformazione nella mitologia induista. È una delle principali divinità del pantheon induista ed è considerata una dea potente e complessa. Kali è spesso rappresentata come una donna con la pelle nera o blu, simbolo della sua natura oscura e potente, e con una collana di teschi, simbolo della sua connessione con la morte e la distruzione. È anche nota per essere una dea feroce e temuta, che distrugge i demoni e protegge i suoi devoti, ma che è anche considerata una dea benevola e compassionevole, che aiuta i suoi devoti a superare le difficoltà e a raggiungere la liberazione spirituale.",
                        "rank" => 9,
                        "pantheon_id" => 5,
                    ],
                     [
                        "name" => "Nuwa",
                        "title" => "Dea della Creazione e della Fertilità",
                        "image" => "gods-thumb/nuwa.svg",
                        "description" => "Nuwa è la dea della creazione, della fertilità e della protezione nella mitologia cinese. È una delle principali divinità del pantheon cinese ed è considerata una dea potente e benevola. Nuwa è spesso rappresentata come una donna con la parte superiore del corpo umana e la parte inferiore di un serpente, simbolo della sua connessione con la terra e la natura. È anche nota per essere la creatrice dell'umanità, che ha modellato gli esseri umani dalla terra e ha dato loro la vita, e per essere una dea protettrice dei morti e dei defunti nell'aldilà cinese.",
                        "rank" => 8,
                        "pantheon_id" => 6,
                    ]
        ];

        foreach ($gods as $god) {
            $newGod = new God();
            $newGod->name = $god['name'];
            $newGod->title = $god['title'];
            $newGod->image = $god['image'];
            $newGod->description = $god['description'];
            $newGod->rank = $god['rank'];
            $newGod->pantheon_id = $god['pantheon_id'];
            $newGod->save();
        }
    }
}
