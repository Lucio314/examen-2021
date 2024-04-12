@extends('layout')
@section('content')
<div style="display:flex; flex-wrap:wrap; justify-content:space-around;gap:2%">
    @foreach ($marches as $marche)
    <div class="card mt-3" style=" width:300px; height:200px margin:20px">
        <div class="card-body">
            <img class="card-img-top" width="100%" height="200px" src="{{$marche->imageUrl()}}" alt="oops">
            <h5 class="card-title">{{$marche->nomMarche}}</h5>
            <p class="card-text">Capacité: {{$marche->capacite}}</p>
        </div>
        <div style="display:flex; justify-content:space-around; margin-bottom:10px">
            <a href="{{ route('marches.edit',$marche->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{ route('marches.destroy', $marche->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
