<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Commune::create([
            'nom' => 'Cotonou',
            'idDepartement' => 1
        ]);
        Commune::create([
            'nom' => 'Porto',
            'idDepartement' => 1
        ]);
        Commune::create([
            'nom' => 'Akpakpa',
            'idDepartement' => 2
        ]);
        Commune::create([
            'nom' => 'Cotonou',
            'idDepartement' => 1
        ]);
    }
}
