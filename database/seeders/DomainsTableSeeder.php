<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domains = [
            [
                "name" => "Guerra",
                "description" => "Il dominio della guerra rappresenta la sfera di influenza dei dei legati alla guerra, alla battaglia e alla strategia militare. Questi dei sono spesso associati a concetti come la forza, il coraggio, la vittoria e la protezione. I dei della guerra sono spesso invocati dai guerrieri e dai soldati prima di entrare in battaglia, e sono considerati protettori dei combattenti e dei vincitori.",
                "color" => "#FF0000",
                "icon" => "fa-solid fa-shield-halved"
            ],
            [
                "name" => "Fulmine",
                "description" => "Il dominio del fulmine rappresenta la sfera di influenza dei dei legati al fulmine, alla tempesta e al potere del cielo. Questi dei sono spesso associati a concetti come la forza, la potenza, la giustizia e la protezione. I dei del fulmine sono spesso invocati per chiedere protezione contro le tempeste e per ottenere forza e potere, e sono considerati protettori dei cielo e dei fulmini.",
                "color" => "#FFFF00",
                "icon" => "fa-solid fa-bolt"
            ],
            [
                "name" => "Amore",
                "description" => "Il dominio dell'amore rappresenta la sfera di influenza dei dei legati all'amore, alla bellezza e alla passione. Questi dei sono spesso associati a concetti come l'attrazione, la bellezza, la fertilità e la protezione. I dei dell'amore sono spesso invocati per chiedere amore e protezione nelle relazioni, e sono considerati protettori dell'amore e della bellezza.",
                "color" => "#FFC0CB",
                "icon" => "fa-solid fa-heart"
            ],
            [
                "name" => "Morte",
                "description" => "Il dominio della morte rappresenta la sfera di influenza dei dei legati alla morte, all'aldilà e al destino. Questi dei sono spesso associati a concetti come la fine, il giudizio, la protezione e la rinascita. I dei della morte sono spesso invocati per chiedere protezione contro la morte e per ottenere forza e coraggio di fronte alla fine, e sono considerati protettori dell'aldilà e del destino.",
                "color" => "#000000",
                "icon" => "fa-solid fa-skull"
            ],
            [
                "name" => "Sole",
                "description" => "Il dominio del sole rappresenta la sfera di influenza dei dei legati al sole, alla luce e alla vita. Questi dei sono spesso associati a concetti come la forza, la vitalità, la protezione e la crescita. I dei del sole sono spesso invocati per chiedere protezione contro le tenebre e per ottenere forza e vitalità, e sono considerati protettori della luce e della vita.",
                "color" => "#FFA500",
                "icon" => "fa-solid fa-sun"
            ],
            [
                "name" => "Mare",
                "description" => "Il dominio del mare rappresenta la sfera di influenza dei dei legati al mare, alle acque e alla navigazione. Questi dei sono spesso associati a concetti come la forza, la protezione, la fertilità e la saggezza. I dei del mare sono spesso invocati per chiedere protezione contro le tempeste e per ottenere forza e saggezza durante i viaggi in mare, e sono considerati protettori del mare e della navigazione.",
                "color" => "#0000FF",
                "icon" => "fa-solid fa-water"
            ]
        ];

        foreach ($domains as $domain){
            $newDomain = new Domain();
            $newDomain->name = $domain['name'];
            $newDomain->description = $domain['description'];
            $newDomain->color = $domain['color'];
            $newDomain->icon = $domain['icon'];
            $newDomain->save();
        }
    }
}
