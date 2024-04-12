<?php

namespace Database\Seeders;

use App\Models\Cluster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cluster::create([
            'nom' => 'Cotonou',
            'idVillage' => 1,
            'idFiliere' => 1
        ]);
        Cluster::create([
            'nom' => 'Porto',
            'idVillage' => 1,
            'idFiliere' => 1
        ]);
        Cluster::create([
            'nom' => 'Akpakpa',
            'idVillage' => 2,
            'idFiliere' => 2
        ]);
        Cluster::create([
            'nom' => 'Cotonou',
            'idVillage' => 1,
            'idFiliere' => 1
        ]);
    }
}
