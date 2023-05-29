@extends('layouts.app')
@section('title', 'Liste des etudiants')
@section('titleHeader', 'Etudiants')
@section('content')
<div class="row">
    <div class="col-8">
        <p>Cliquez sur un étudiant pour voir les détails</p>
    </div>
    <div class="col-4">
        <p>Créer un nouvel étudiant</p>
        <a href="{{route('site.create')}}" class="btn btn-primary btn-sm">Ajouter</a>
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Liste des étudiantssdf</h4>
            </div>
            <div class="card-body">
                <ul>asdf
                    @forelse($etudiants as $etudiant)
                    <li><a href="{{ route('site.show', $etudiant->id)}}">{{$etudiant->nom}}</a></li>
                    @empty
                    <li class="text-danger">Aucun étudiant trouvé</li>
                    @endforelse
                </ul>
            </div>
            {{ $etudiants}}
           <p> asfasfd</p>
        </div>

    </div>

</div>
@endsection