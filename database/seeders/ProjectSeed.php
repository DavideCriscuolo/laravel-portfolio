<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            ["title" => "PalasportMax", "content" => "PalasportMax è una web app dedicata ai clienti del centro sportivo: uno strumento pratico e intuitivo per conoscere meglio la palestra, restare aggiornati sui corsi e accedere facilmente alle informazioni principali. Il progetto si basa sulla creazione di una web app dedicata ai clienti del centro sportivo: uno strumento pratico e intuitivo per conoscere meglio la palestra, restare aggiornati sui corsi e accedere facilmente alle informazioni principali. L’obiettivo principale del progetto è semplificare l’esperienza del cliente, offrendo un punto di accesso digitale dove consultare in modo immediato i propri dati e la scheda di allenamento aggiornata mensilmente dal personal trainer. Oltre alla gestione personalizzata delle schede, l’app fornisce una panoramica chiara sui servizi della palestra e sulle attività disponibili, così da migliorare la comunicazione tra struttura e cliente e favorire un percorso di allenamento più consapevole ed efficace. È stata inoltre integrata una funzionalità su intelligenza artificiale, pensata per assistere gli iscritti nella gestione degli allenamenti e consigli sul mondo del Fitness.", "tools" => "React, Node, Express"],
            ["title" => "SantaCeciliaGarden", "content" => "Il progetto si basa sullo sviluppo di un sito web dedicato a un vivaio specializzato in ulivi secolari. Il sito presenta la collezione di piante, le caratteristiche uniche di ciascun esemplare e i servizi offerti dal vivaio, offrendo agli utenti un’esperienza chiara e immersiva nella selezione di ulivi storici e di pregio. ", "tools" => "React"]
        ];


        foreach ($projects as $project) {

            $newProject = new Project();
            $newProject->title = $project["title"];
            $newProject->content = $project["content"];
            $newProject->tools = $project["tools"];
            $newProject->save();
        };
    }
}
