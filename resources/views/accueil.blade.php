@extends('layouts/templateBULMA')

<!-- DEBUT NAVBAR MON PROFIL > Deconnexion > AJOUTER UNE ACTIVITE-->
@section('navbar')
<div class="navbar-end">
    <div class="navbar-item has-dropdown is-hoverable">

        @if(Auth::user()->admin==true)
        <div class="navbar-link">Mon Compte Admin</div>
        @else
        <div class="navbar-link">Mon Compte</div>
        @endif

        <div class="navbar-dropdown">

            <form id="formLogout" action="{{url('/logout')}}" method="POST">@csrf</form>

            <div>
                <span class="is-flex is-justify-content-center is-flex-wrap-wrap">
                    @auth
                    <button type="submit" form="formLogout" class="button is-white">
                        Déconnexion
                    </button>

                    @else
                    <a href="{{ url('/login') }}" class="button is-white">
                        Connexion
                    </a>
                    <a href="{{ url('/register') }}" class="button is-white">
                        Création d'un compte
                    </a>
                    @endauth

                    <!-- Ajouter activite enfant pour ADMIN -->
                    @if(Auth::user()->admin==true)
                    <!-- Ajouter activite pour ADMIN -->
                    <button class="button is-white" type="submit">
                        <a href="{{route('activite.create')}}" class="has-text-black">
                            Ajouter un activite
                        </a>
                    </button>

                    <!-- Ajouter efnant pour ADMIN -->
                    <button class="button is-white" type="submit">
                        <a href="{{route('enfant.create')}}" class="has-text-black">
                            Ajouter un enfant
                        </a>
                    </button>
                    @endif
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- FIN NAVBAR MON PROFIL -->

@section('titre')
ACCUEIL
@endsection

@section('content')
<!-- CARTE LISTE ACTIVITES -->
<div class='mt-6 mb-6 container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-5'>
            <div class="card">
                <div class="card-content has-background-link">
                    <!-- LIENS VERS ACTIVITES -->
                    <p class="title has-text-white">
                        Activités disponibles
                    </p>
                </div>
                <footer class="card-footer">
                    <p class="card-footer-item">
                        <span>
                            Liste des <a href="{{ url('activite'); }}">activités</a>
                        </span>
                    </p>
                </footer>
            </div>
        </div>
    </div>
</div>

<!-- CARTE LISTE ENFANTS -->
<div class='mt-6 mb-6 container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-5'>
            <div class="card">
                <div class="card-content has-background-link">
                    <!-- LIENS VERS LISTE ENFANTS -->
                    <p class="title has-text-white">
                        Enfants inscrits sur le site
                    </p>
                </div>
                <footer class="card-footer">
                    <p class="card-footer-item">
                        <span>
                            Liste des <a href="{{ url('enfant'); }}">enfants</a>
                        </span>
                    </p>
                </footer>
            </div>
        </div>
    </div>
</div>
@endsection




<!--
    <form action="{{url('activite')}}" method="post"> @csrf

        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input value="{{ old('nom') }}" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Saisir le nom"/>
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
-->