@extends('layouts/templateBULMA')

@section('titre')
AJOUTER UNE ACTIVITÉ
@endsection


@section('content')

<!-- carte pour les ERREURS -->
@if($errors->any())
<div class='mt-6 mb-6 container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-5'>
            <div class="card card-error">
                <div class="card-content ">

                    <div class="">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li class="has-text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endif


<!-- carte pour le FORMULAIRE-->
<div class='mt-6 mb-6 container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-5'>
            <div class="card">
                <div class="card-content card-form">

                    <form action="{{url('activite')}}" method="post">@csrf

                        <div class="mb-3 row">
                            <label for="nom" class="has-text-link">Nom</label>
                            <div class="col-sm-10">
                                <input value="{{ old('nom') }}" type="text" class="input is-link form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Saisir le nom"/>                            
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="has-text-link">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="input is-link form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Saisir la description" value="{{ old('description') }}"/>                                                   
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="taille" class="has-text-link">Nombre de place</label>
                            <div class="col-sm-10">
                                <input type="number" class="input is-link form-control" id="taille" name="taille" value="0"/>                       
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
                                <button class="button is-link" type="submit">Ajouter</button>
                            </div>
                        </div>  

                    </form>
                    
                    <button class="button has-background-whit button-annuler">
                        <a href="{{url('activite')}}" class="has-text-link">Annuler</a>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .button-annuler,
    .card-form {
        border: 1px solid blue;
    }

    .card-error {
        border: 1px solid red;
    }
</style>
@endsection