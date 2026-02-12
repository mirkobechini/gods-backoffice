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
                "image" => "#",
                "description" => "Il pantheon greco è uno dei più famosi e influenti nella storia della mitologia. È composto da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Il pantheon greco è noto per la sua complessità e ricchezza, con divinità che rappresentano vari aspetti della vita umana e della natura."
            ],
            [
                "name" => "Aesir",
                "region" => "Nord Europa",
                "home_base" => "Asgard",
                "image" => "#",
                "description" => "Il pantheon norreno, noto anche come pantheon vichingo, è un insieme di divinità adorate dai popoli germanici del Nord Europa, in particolare dai vichinghi. Questo pantheon è caratterizzato da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Le divinità norrene sono spesso associate a elementi naturali, guerre, saggezza e magia."
            ],
            [
                "name" => "Yamato",
                "region" => "Giappone",
                "home_base" => "Takama-ga-hara",
                "image" => "#",
                "description" => "Il pantheon giapponese, noto anche come pantheon shintoista, è un insieme di divinità adorate nella religione shintoista del Giappone. Questo pantheon è caratterizzato da una vasta gamma di divinità, ognuna con le proprie caratteristiche, poteri e storie. Le divinità giapponesi sono spesso associate a elementi naturali, come il sole, la luna, le montagne e i fiumi, nonché a concetti come la fertilità, la guerra e la saggezza."
            ]
        ];

        foreach ($pantheons as $pantheon){
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
