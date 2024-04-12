@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('clusters.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="idFiliere" class="form-label">Filière</label>
                    <select name="idFiliere" id="idFiliere" class="form-select">
                        @foreach ($filieres as $filiere)
                        <option value="{{$filiere->idFiliere}}">{{$filiere->nom}}</option>
                        @endforeach
                    </select>
                    @error('idFiliere')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="departement" class="form-label">Département</label>
                        <select name="departement" id="idDepartement" class="form-select">
                            @foreach ($departements as $departement)
                            <option value="{{$departement->idDepartement}}">{{$departement->nom}}</option>
                            @endforeach
                        </select>
                        @error('departement')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 col">
                        <label for="commune" class="form-label">Commune</label>
                        <select name="commune" id="idVillage" class="form-select">
                            @foreach ($communes as $commune)
                            <option value="{{$commune->idCommune}}">{{$commune->nom}}</option>
                            @endforeach
                        </select>
                        @error('commune')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="arrondissement" class="form-label">Arrondissement</label>
                        <select name="arrondissement" id="idVillage" class="form-select">
                            @foreach ($arrondissements as $arrondissement)
                            <option value="{{$arrondissement->idArrondissement}}">{{$arrondissement->nom}}</option>
                            @endforeach
                        </select>
                        @error('arrondissement')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="village" class="form-label">Village</label>
                        <select name="idVillage" id="idVillage" class="form-select">
                            @foreach ($villages as $village)
                            <option value="{{$village->idVillage}}">{{$village->nom}}</option>
                            @endforeach
                        </select>
                        @error('idVillage')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="nom" class="form-label">Nom du cluster</label>
                    <input class="form-control" type="text" id="nom" name="nom">
                    @error('nom')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="<div class=" btn-group" role="group" aria-label="Button group">
                    <button type="submit" class="btn btn-primary" style="background-color: #00C0EF">Enregistrer</button>
                    <button type="reset" class="btn btn-secondary" style="background-color: #F39C12">Annuler</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection