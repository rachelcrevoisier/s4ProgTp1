@extends('layouts.app')
@section('title', 'Modifier un étudiant')
@section('titleHeader', 'Modifier un étudiant')
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                @method('put')
                <div class="card-header">
                    Formulaire
                </div>
                <div class="card-body">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" value="{{$etudiant->nom}}">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="form-control" value="{{$etudiant->adresse}}"><br>
                    <label for="ville">Ville</label>
                    <select name="id" id="ville" class="">
                        @foreach($villes as $ville)
                        @if($etudiant->ville_id == $ville->id)
                        <option selected value="{{$ville->id}}">{{$ville->nom}}</option>
                        @else
                        <option value="{{$ville->id}}">{{$ville->nom}}</option>
                        @endif
                        @endforeach
                    </select><br><br>
                    <label for="courriel">Courriel</label>
                    <input type="courriel" id="courriel" name="courriel" class="form-control" value="{{$etudiant->courriel}}">
                    <label for="telephone">Téléphone</label>
                    <input type="text" id="telephone" name="telephone" class="form-control" value="{{$etudiant->telephone}}">
                    <label for="date_maissance">Date de naissance</label>
                    <input type="text" id="date_maissance" name="date_maissance" class="form-control" value="{{$etudiant->date_maissance}}">
                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection