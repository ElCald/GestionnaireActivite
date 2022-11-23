@extends('template')
@section('titre') Modifier {{$activites->nom, $activites->prenom}} @endsection
@section('contenu')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{url('activite', $activites->id)}}" method="post">@csrf
    @method('PUT')
        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Saisir le nom" value="{{$activites->nom}}"/>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Saisir la description">{{ old('description') }}</textarea>
            </div>
        </div>


        <div class="mb-3">
            <div class="offset-sm-2 col-sm-10">
            <button class="btn btn-primary mb-1 mr-1" type="submit">Ajouter</button>
            <a href="{{url('activite')}}" class="btn btn-danger mb-1">Annuler</a>
        </div>
    </form>

@endsection