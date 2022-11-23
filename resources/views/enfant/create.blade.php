@extends('template')
@section('titre') Ajouter un enfant @endsection

@section('contenu')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{url('enfant')}}" method="post"> @csrf

        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input value="{{ old('nom') }}" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Saisir le nom"/>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
            <div class="col-sm-10">
                <input value="{{ old('prenom') }}" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" placeholder="Saisir le prénom"/>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="date" class="col-sm-2 col-form-label">Date de naissance</label>
            <div class="col-sm-10">
                <input value="{{ old('date') }}" type="text" class="form-control @error('date') is-invalid @enderror" name="date" id="date" placeholder="Saisir la date de naissance"/>
            </div>
        </div>

        <div class="mb-3">
            <div class="offset-sm-2 col-sm-10">
            <button class="btn btn-primary mb-1 mr-1" type="submit">Ajouter</button>
            <a href="{{url('enfant')}}" class="btn btn-danger mb-1">Annuler</a>
        </div>
        
    </form>
@endsection