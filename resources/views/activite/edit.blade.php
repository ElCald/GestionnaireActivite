@extends('template')
@section('titre') Modifier {{$activites->nom}} @endsection
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
        <label for="nom" class="has-text-link">Nom</label>
        <div class="col-sm-10">
            <input type="text" class="input is-link form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Saisir le nom" value="{{$activites->nom}}"/>                            
        </div>
    </div>

    <div class="mb-3 row">
        <label for="description" class="has-text-link">Description</label>
        <div class="col-sm-10">
            <input type="text" class="input is-link form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Saisir la description" value="{{$activites->description}}"/>                                                   
        </div>
    </div>

    <div class="mb-3 row">
        <label for="taille" class="has-text-link">Nombre de place</label>
        <div class="col-sm-10">
            <input type="number" class="input is-link form-control" id="taille" name="taille" value="{{$activites->taille}}"/>                       
        </div>
    </div>

    <div class="mb-3 row">
        
        <div class="col-sm-10">
            <select id="jour" name="jour" class="select is-medium"/>
                <option value="Lundi" id="jour">Lundi</option>   
                <option value="Mardi" id="jour">Mardi</option>   
                <option value="Mercredi" id="jour">Mercredi</option>
                <option value="Jeudi" id="jour">Jeudi</option>
                <option value="Vendredi" id="jour">Vendredi</option>
                <option value="Samedi" id="jour">Samedi</option>
                <option value="Dimanche" id="jour">Dimanche</option>
            </select>   
            
            
            <select id="journee" name="journee" class="select is-medium"/>
                <option value="Matin" id="journee">Matin</option>
                <option value="Apres-midi" id="journee">Après-midi</option>   
                <option value="Matin/Apres-midi" id="journee">Matin/Après-midi</option>       
            </select> 
        </div>
    </div>


        <div class="mb-3">
            <div class="offset-sm-2 col-sm-10">
            <button class="btn btn-primary mb-1 mr-1" type="submit">Ajouter</button>
            <a href="{{url('activite')}}" class="btn btn-danger mb-1">Annuler</a>
        </div>
    </form>

@endsection