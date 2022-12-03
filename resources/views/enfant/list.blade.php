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
LISTE DES ENFANTS
@endsection

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
                            Ajouter une activité
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
LISTE DES ENFANTS INSCRITS
@endsection

@section('content')

@auth

<ul class="list-group">
    @if(Auth::user()->admin==true)

        @foreach($enfantsList as $enfants)
        <!-- Liste de tous les enfants pour l'admin -->
        <a href="{{route('enfant.show', $enfants->id)}}">
        <div class='mt-6 mb-6 container has-text-centered'>
            <div class='columns is-mobile is-centered'>
                <div class='column is-6'>
                    <div class="card">
                        <div class='card-header has-background-link '>
                            <div class="card-header-title is-justify-content-center has-text-white ">
                                {{$enfants->nom}} {{$enfants->prenom}}
                            </div>
                        </div>
                        <div class="card-content">
                            <p class='is-succes'>
                                {{$enfants->date}}
                                Tuteur : {{$enfants->user->name}}
                            </p>
                            <button type="submit" formaction="{{route('enfant.destroy', $enfants->id)}}" form="deleteForm" class="button is-link"><i class="bi bi-trash">Supp</i></button>
                            <a href="{{route('enfant.edit',$enfants->id)}}" class="button is-link">Edit</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        </a>
        @endforeach

    @else

        @foreach($enfantsList->where('user_id', Auth::user()->id) as $enfants)
        <!-- Liste des enfants de l'utilisateur -->
        <a href="{{route('enfant.show', $enfants->id)}}" >
        <div class='mt-6 mb-6 container has-text-centered'>
            <div class='columns is-mobile is-centered'>
                <div class='column is-3'>
                    <div class="card">
                        <div class='card-header has-background-link '>
                            <div class="card-header-title is-justify-content-center has-text-white ">
                                {{$enfants->nom}} {{$enfants->prenom}} 
                            </div>
                        </div>
                        <button type="submit" formaction="{{route('enfant.destroy', $enfants->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1"><i class="bi bi-trash">Supp</i></button>
                        <a href="{{route('enfant.edit',$enfants->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-pencil-square">Edit</i></a>
                        <!-- Morceau sur le tuteur -->
                    </div>
                </div>
            </div>
        </div>
        </a>
        
        @endforeach


    @endif

</ul>

<form id="deleteForm" action="" method="POST">
    @method('DELETE')
    @csrf
</form>
@endauth
@endsection