@extends('layout')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<a href="{{route('clusters.create')}}" class="btn"> ADD CLUSTER</a>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Cluster</th>
            <th>village</th>
            <th>Filière</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clusters as $cluster)
        <tr>
            <td scope="row">{{$cluster->nom}}</td>
            <td>{{$cluster->village->nom}}</td>
            <td>{{$cluster->filiere->nom}}</td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection
