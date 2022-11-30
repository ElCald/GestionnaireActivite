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
LISTE DES ACTIVITÉS
@endsection

@section('content')
<div class='columns text is-flex is-flex-wrap-wrap'>
    @foreach($activitesList as $activites)
    <!-- DEBUT DE LA CARTE ACTIVITE EX : AQUA PONEY -->
    <div class='mt-6 mb-6 container has-text-centered'>
        <div class='columns is-mobile is-centered'>
            <div class='column is-9'>
                <div class="card">
                    <div class='card-header has-background-link'>
                        <div class="card-header-title is-justify-content-space-between has-text-white">
                            <p>{{$activites->nom}}</p>
                            <p>10/12/2022</p>
                            <p>10h-12h</p>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class='is-succes'>
                            {{$activites->description}}
                        </p>

                    </div>
                    <div>
                        <footer class="card-footer is-flex is-justify-content-center has-background-link">
                            <div class="mt-4 mb-2 buttons">
                                <button class="button is-white has-text-link">S'inscrire</button>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE LA CARTE ACTIVITE -->
    @endforeach
</div>



@if(Auth::user()->admin==true)
<form id="deleteForm" action="" method="POST">
    @method('DELETE')
    @csrf
</form>
@endif


@endsection