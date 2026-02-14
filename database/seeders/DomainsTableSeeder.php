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
            ],
            [
                "name" => "Terra",
                "description" => "Il dominio della terra rappresenta la sfera di influenza dei dei legati alla terra, alla natura e alla fertilità. Questi dei sono spesso associati a concetti come la forza, la protezione, la crescita e la saggezza. I dei della terra sono spesso invocati per chiedere protezione contro le calamità naturali e per ottenere forza e saggezza durante le attività agricole, e sono considerati protettori della terra e della natura.",
                "color" => "#008000",
                "icon" => "fa-solid fa-tree"
            ],
            [
                "name" => "Cielo",
                "description" => "Il dominio del cielo rappresenta la sfera di influenza dei dei legati al cielo, alla volta celeste e alla divinità. Questi dei sono spesso associati a concetti come la forza, la protezione, la saggezza e la giustizia. I dei del cielo sono spesso invocati per chiedere protezione contro le forze oscure e per ottenere forza e saggezza, e sono considerati protettori del cielo e della divinità.",
                "color" => "#87CEEB",
                "icon" => "fa-solid fa-cloud"
            ],
            [
                "name" => "Fertilità",
                "description" => "Il dominio della fertilità rappresenta la sfera di influenza dei dei legati alla fertilità, alla crescita e alla prosperità. Questi dei sono spesso associati a concetti come la forza, la protezione, la crescita e la prosperità. I dei della fertilità sono spesso invocati per chiedere protezione contro le carestie e per ottenere forza e prosperità durante le attività agricole, e sono considerati protettori della fertilità e della prosperità.",
                "color" => "#FFD700",
                "icon" => "fa-solid fa-seedling"
            ],
            [
                "name" => "Saggezza",
                "description" => "Il dominio della saggezza rappresenta la sfera di influenza dei dei legati alla saggezza, alla conoscenza e alla protezione. Questi dei sono spesso associati a concetti come la forza, la protezione, la saggezza e la giustizia. I dei della saggezza sono spesso invocati per chiedere protezione contro le forze oscure e per ottenere forza e saggezza, e sono considerati protettori della saggezza e della conoscenza.",
                "color" => "#800080",
                "icon" => "fa-solid fa-brain"
            ],
            [
                "name" => "Giustizia",
                "description" => "Il dominio della giustizia rappresenta la sfera di influenza dei dei legati alla giustizia, alla legge e alla protezione. Questi dei sono spesso associati a concetti come la forza, la protezione, la saggezza e la giustizia. I dei della giustizia sono spesso invocati per chiedere protezione contro le forze oscure e per ottenere forza e saggezza, e sono considerati protettori della giustizia e della legge.",
                "color" => "#A52A2A",
                "icon" => "fa-solid fa-balance-scale"
            ],
            [
                "name" => "Musica",
                "description" => "Il dominio della musica rappresenta la sfera di influenza dei dei legati alla musica, all'arte e alla creatività. Questi dei sono spesso associati a concetti come la forza, la protezione, la saggezza e la creatività. I dei della musica sono spesso invocati per chiedere protezione contro le forze oscure e per ottenere forza e saggezza, e sono considerati protettori della musica e dell'arte.",
                "color" => "#FF69B4",
                "icon" => "fa-solid fa-music"
            ],
            [
                "name" => "Medicina",
                "description" => "Il dominio della medicina rappresenta la sfera di influenza dei dei legati alla medicina, alla guarigione e alla protezione. Questi dei sono spesso associati a concetti come la forza, la protezione, la saggezza e la guarigione. I dei della medicina sono spesso invocati per chiedere protezione contro le malattie e per ottenere forza e saggezza durante i processi di guarigione, e sono considerati protettori della medicina e della guarigione.",
                "color" => "#00FFFF",
                "icon" => "fa-solid fa-hand-holding-medical"
            ],
            [
                "name" => "Viaggio",
                "description" => "Il dominio del viaggio rappresenta la sfera di influenza dei dei legati al viaggio, alla protezione e alla guida. Questi dei sono spesso associati a concetti come la forza, la protezione, la saggezza e la guida. I dei del viaggio sono spesso invocati per chiedere protezione durante i viaggi e per ottenere forza e saggezza durante le avventure, e sono considerati protettori del viaggio e della guida.",
                "color" => "#D2691E",
                "icon" => "fa-solid fa-compass"
            ],
            [
                "name" => "Tempo",
                "description" => "Il dominio del tempo rappresenta la sfera di influenza dei dei legati al tempo, alla protezione e alla saggezza. Questi dei sono spesso associati a concetti come la forza, la protezione, la saggezza e il controllo del tempo. I dei del tempo sono spesso invocati per chiedere protezione contro le forze oscure e per ottenere forza e saggezza durante i processi di cambiamento, e sono considerati protettori del tempo e della saggezza.",
                "color" => "#708090",
                "icon" => "fa-solid fa-clock"
            ],
            [
                "name" => "Fato",
                "description" => "Il dominio del fato rappresenta la sfera di influenza dei dei legati al destino, alla protezione e alla saggezza. Questi dei sono spesso associati a concetti come la forza, la protezione, la saggezza e il controllo del destino. I dei del fato sono spesso invocati per chiedere protezione contro le forze oscure e per ottenere forza e saggezza durante i processi di cambiamento, e sono considerati protettori del destino e della saggezza.",
                "color" => "#696969",
                "icon" => "fa-solid fa-dice"
            ],
            [
                "name" => "Magia",
                "description" => "Il dominio della magia rappresenta la sfera di influenza dei dei legati agli incantesimi, ai rituali e alle forze misteriose del cosmo. Questi dei sono spesso associati a concetti come conoscenza arcana, trasformazione, protezione e potere spirituale. Le divinità della magia vengono invocate per ottenere guida nei misteri, difesa dalle energie oscure e controllo delle arti occulte.",
                "color" => "#4B0082",
                "icon" => "fa-solid fa-wand-sparkles"
            ]
        ];

        foreach ($domains as $domain) {
            $newDomain = new Domain();
            $newDomain->name = $domain['name'];
            $newDomain->description = $domain['description'];
            $newDomain->color = $domain['color'];
            $newDomain->icon = $domain['icon'];
            $newDomain->save();
        }
    }
}
