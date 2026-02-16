<?php

namespace Database\Seeders;

use App\Models\Pantheon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PantheonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pantheons = [
            [
                "name" => "Olimpo",
                "region" => "Grecia",
                "home_base" => "Monte Olimpo",
                "image" => "pantheons-img/olimpo.jpg",
                "description" => "Il pantheon greco è uno dei più famosi e influenti nella storia della mitologia. È composto da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Il pantheon greco è noto per la sua complessità e ricchezza, con divinità che rappresentano vari aspetti della vita umana e della natura."
            ],
            [
                "name" => "Aesir",
                "region" => "Nord Europa",
                "home_base" => "Asgard",
                "image" => "pantheons-img/asgard.png",
                "description" => "Il pantheon norreno, noto anche come pantheon vichingo, è un insieme di divinità adorate dai popoli germanici del Nord Europa, in particolare dai vichinghi. Questo pantheon è caratterizzato da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Le divinità norrene sono spesso associate a elementi naturali, guerre, saggezza e magia."
            ],
            [
                "name" => "Yamato",
                "region" => "Giappone",
                "home_base" => "Takama-ga-hara",
                "image" => "pantheons-img/takama-ga-hara.png",
                "description" => "Il pantheon giapponese, noto anche come pantheon shintoista, è un insieme di divinità adorate nella religione shintoista del Giappone. Questo pantheon è caratterizzato da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Le divinità giapponesi sono spesso associate a elementi naturali, come il sole, la luna, le montagne e i fiumi, nonché a concetti come la fertilità, la guerra e la saggezza."
            ],
            [
                "name" => "Egitto",
                "region" => "Egitto",
                "home_base" => "Nilo",
                "image" => "pantheons-img/egitto.jpg",
                "description" => "Il pantheon egizio è uno dei più antichi e complessi nella storia della mitologia. È composto da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Il pantheon egizio è noto per la sua ricchezza e varietà, con divinità che rappresentano vari aspetti della vita umana, della natura e dell'aldilà."
            ],
            [
                "name" => "Deva",
                "region" => "India",
                "home_base" => "Himalaya",
                "image" => "pantheons-img/induista.avif",
                "description" => "Il pantheon induista è uno dei più ricchi e complessi nella storia della mitologia. È composto da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Il pantheon induista è noto per la sua diversità e varietà, con divinità che rappresentano vari aspetti della vita umana, della natura e dell'aldilà."
            ],
            [
                "name" => "Burocrazia Celeste",
                "region" => "Cina",
                "home_base" => "Monte Kunlun",
                "image" => "pantheons-img/burocrazia-celeste.jpg",
                "description" => "Il pantheon cinese è uno dei più antichi e complessi nella storia della mitologia. È composto da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Il pantheon cinese è noto per la sua ricchezza e varietà, con divinità che rappresentano vari aspetti della vita umana, della natura e dell'aldilà."
            ]

        ];

        foreach ($pantheons as $pantheon) {
            $newPanteon = new Pantheon();
            $newPanteon->name = $pantheon['name'];
            $newPanteon->region = $pantheon['region'];
            $newPanteon->home_base = $pantheon['home_base'];
            $newPanteon->image = $pantheon['image'];
            $newPanteon->description = $pantheon['description'];
            $newPanteon->save();
        }
    }
}
