<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techs = ["Javascript", "Php", "NodeJs", "React", "Mysql"];

        foreach ($techs as $tech) {

            $newTech = new Technology();
            $newTech->name = $tech;
            $newTech->save();
        }
    }
}
