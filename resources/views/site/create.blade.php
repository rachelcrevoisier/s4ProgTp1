@extends('layouts.app')
@section('title', 'Ajouter un étudiant')
@section('titleHeader', 'Ajouter un étudiant')
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                <div class="card-header">
                    Formulaire
                </div>
                <div class="card-body">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom') }}"><br>
                    @if($errors->has('nom'))
                    <p>{{ $errors->first('nom') }}</p>
                    @endif
                    <label for="adresse">Adresse</label>
                    <input name="adresse" id="adresse" class="form-control" value="{{ old('adresse') }}"><br>
                    <label for="ville">Ville</label>
                    <select name="id" id="ville" class="">
                        @foreach($ville as $villes)
                        <option value="{{$villes->id}}">{{$villes->nom}}</option>
                        @endforeach
                    </select><br><br>
                    <label for="courriel">Courriel</label>
                    <input type="courriel" id="courriel" name="courriel" class="form-control" value="{{ old('courriel') }}"><br>
                    @if($errors->has('courriel'))
                    <p>{{ $errors->first('courriel') }}</p>
                    @endif
                    <label for="telephone">Téléphone</label>
                    <input type="text" id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}">
                    <br>
                    <label for="date_maissance">Date de naissance</label>
                    <input type="text" id="date_maissance" name="date_maissance" value="{{ old('date_maissance') }}" class="form-control">
                    @if($errors->has('date_maissance'))
                    <p>{{ $errors->first('date_maissance') }}</p>
                    @endif

                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection