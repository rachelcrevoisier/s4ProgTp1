@extends('layouts.app')
@section('title', 'Etudiant')
@section('titleHeader', 'Etudiant')
@section('content')
<div class="row mt-5">
    <div class="col-12">
        <a href="{{route('site.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
        <hr>
        <h2 class='display-6 mt-5'>{{$etudiant->nom}}</h2>
        <p>{{$etudiant->adresse }}</p>
        <p>Ville :
            @if(isset($etudiant->siteHasVille))
            {{$etudiant->siteHasVille->nom}}
            @endif

        </p>
        <p><a href="mailto:{{$etudiant->courriel }}"> {{$etudiant->courriel }} </a>- {{$etudiant->telephone }}</p>
        <p><strong>Date de naissance :</strong> {{$etudiant->date_maissance }}</p>
    </div>
    <hr>
</div>
<div class="row">
    <div class="col-6">
        <a href="{{ route('site.edit', $etudiant->id)}}" class="btn btn-success">Modifier</a>
    </div>
    <div class="col-6">

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Effacer
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Vous souhaitez vraiment supprimer cet étudiant : {{$etudiant->nom}} ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <form method=post>
                    @csrf
                    @method('delete')
                    <input type="submit" value="Effacer" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection