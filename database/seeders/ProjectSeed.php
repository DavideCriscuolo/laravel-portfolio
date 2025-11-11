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
            ["title" => "PalasportMax", "content" => "Progetto per una gestione di una palestra con autenticazione ecc", "tools" => "React, Node, Express"],
            ["title" => "SantaCeciliaGarden", "content" => "Progetto vetrina per un vivaio", "tools" => "React"]
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
