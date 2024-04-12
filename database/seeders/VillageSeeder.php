<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Village::create([
            'nom' => 'Village1',
            'idArrondissement' => 1
        ]);
        Village::create([
            'nom' => 'Village2',
            'idArrondissement' => 1
        ]);
        Village::create([
            'nom' => 'Village3',
            'idArrondissement' => 2
        ]);
        Village::create([
            'nom' => 'Village1',
            'idArrondissement' => 1
        ]);
    }
}
