@extends('layouts/templateBULMA')

<!-- DEBUT NAVBAR MON PROFIL > Deconnexion > AJOUTER UNE ACTIVITE-->
@section('navbar')
<div class="navbar-end">
    <div class="navbar-item has-dropdown is-hoverable">

        @auth
        @if(Auth::user()->admin==true)
        <div class="navbar-link">Mon Compte Admin</div>
        @else
        <div class="navbar-link">Mon Compte</div>
        @endif
        @endauth

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
                    @auth
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
                    @endauth
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
                <a href="{{route('activite.show', $activites->id)}}">
                <div class="card">
                    <div class='card-header has-background-link'>
                        <div class="card-header-title is-justify-content-center has-text-white">
                            {{$activites->nom}}
                        </div>
                    </div>
                    <div class="card-content">
                        <p class='is-succes'>
                            {{$activites->description}}
                        </p>
                        
                        @auth
                        <!-- Admin uniquement -->
                        @if(Auth::user()->admin==true)
                            <button type="submit" formaction="{{route('activite.destroy', $activites->id)}}" form="deleteForm" class="button is-link">Supp</button>
                            <a href="{{route('activite.edit',$activites->id)}}" class="button is-link">Edit</a>
                        @endif
                        @endauth
                    </div>
                    


                    {{--<div class="card-content">
                        <p class='is-succes'>
                            @foreach($activites->horaire as $horaire)
                                @if($loop->first)
                                    <b>Horaires</b> : <br/>
                                @endif

                                {{$horaire->jour}}
                                {{$horaire->heureDebut}} |
                                {{$horaire->heureFin}}<br/>
                                
                            @endforeach
                        </p>
                    </div>--}}
                    <div>
                        <footer class="card-footer is-flex is-justify-content-center has-background-link">
                            {{--<div class="mt-4 mb-2 buttons">
                                <button class="button is-white has-text-link">S'inscrire</button>
                            </div>--}}
                        </footer>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <!-- FIN DE LA CARTE ACTIVITE -->
    @endforeach
</div>


@auth
@if(Auth::user()->admin==true)
<form id="deleteForm" action="" method="POST">
    @method('DELETE')
    @csrf
</form>
@endif
@endauth


@endsection