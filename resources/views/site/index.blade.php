@extends('layouts.app')
@section('title', 'Liste des etudiants')
@section('titleHeader', 'Liste des etudiants')
@section('content')
<div class="row">

    <div class="col-12">
        <p><a href="{{route('site.create')}}" class="btn btn-success btn">Ajouter un étudiant</a></p>

    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Courriel</th>
            <th scope="col">Voir</th>
            <th scope="col">Modifier</th>
        </tr>
    </thead>
    <tbody>
        @forelse($etudiants as $etudiant)
        <tr>
            <th scope="row">{{$etudiant->nom}}</th>
            <td>{{$etudiant->adresse}}</td>
            <td><a href="mailto:{{$etudiant->courriel}}">{{$etudiant->courriel}}</a></td>
            <td><a href="{{ route('site.show', $etudiant->id)}}">Voir</a></td>
            <td><a href="{{ route('site.edit', $etudiant->id)}}">Modifier</a></td>
        </tr>
        @empty
        <tr>
            <td class="text-danger">Aucun étudiant trouvé</td>
        </tr>
        @endforelse
    </tbody>
</table>
<br>
{{ $etudiants }}
<br>

@endsection