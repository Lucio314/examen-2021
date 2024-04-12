<?php

namespace App\Http\Controllers;

use App\Models\Arrondissement;
use App\Models\Cluster;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Filiere;
use App\Models\Village;
use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clusters = Cluster::orderBy('nom')->get();
        return view('clusters.index', compact('clusters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::all();
        $communes = Commune::all();
        $departements = Departement::all();
        $villages = Village::all();
        $arrondissements = Arrondissement::all();
        return view('clusters.create', compact('filieres', 'departements', 'arrondissements', 'communes', 'villages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validate = $request->validate([
            'nom' => 'string',
            'idFiliere' => 'required|integer',
            'idVillage' => 'required|integer'
        ]);

        Cluster::create($validate);
        return redirect()->route('clusters.index')->with('success', 'Cluster crée avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cluster $cluster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cluster $cluster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cluster $cluster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cluster $cluster)
    {
        //
    }
}
