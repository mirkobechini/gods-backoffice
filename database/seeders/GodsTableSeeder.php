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
