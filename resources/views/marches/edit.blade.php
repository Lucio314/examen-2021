@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('marches.update',  $marche->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nomMarche" class="form-label">Nom du marché</label>
                    <input type="text" class="form-control" id="nomMarche" name="nomMarche"
                        value="{{ $marche->nomMarche }}" required>
                    @error('nomMarche')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        required>{{ $marche->description }}</textarea>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="capacite" class="form-label">Capacité</label>
                    <input type="number" class="form-control" id="capacite" name="capacite"
                        value="{{ $marche->capacite }}" required>
                    @error('capacite')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <select name="ville" id="ville" class="form-control" required>
                        @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}" {{ $marche->idVille == $ville->id ? 'selected' : ''}}>
                            {{$ville->nomVille }}</option>
                        @endforeach
                    </select>
                    @error('ville')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror @error('ville')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" value={{$marche->image}} name="image"
                    accept="image/*">
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection
