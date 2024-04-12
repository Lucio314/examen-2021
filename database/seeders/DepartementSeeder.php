<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departement::create([
            'nom' => 'Atlantique'
        ]);
        Departement::create([
            'nom' => 'Ouémé'
        ]);
        Departement::create([
            'nom' => 'Littoral'
        ]);
        Departement::create([
            'nom' => 'Littoral'
        ]);
    }
}
