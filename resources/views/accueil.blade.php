@extends('template')


@section('titre')
Gestionnaire 
@endsection


@section('contenu')

<form id="formLogout" action="{{url('/logout')}}" method="POST">@csrf</form>

    <div class="d-flex justify-content-left">
        <span>
        @auth
            <button type="submit" form="formLogout" class="btn btn-sm btn-danger mb-2 mr-2">
                Déconnexion
            </button>
        @else
            <a href="{{ url('/login') }}" class="btn btn-sm btn-primary mb-2 mr-2">
                Connexion
            </a>
            <a href="{{ url('/register') }}" class="btn btn-sm btn-primary mb-2 mr-2">
                Création d'un compte
            </a>
        @endauth
        </span>
    </div>

<p>Gestionnaire des activités d'une ville</p>

<p>
    <a class="btn btn-primary mb-1 mr-1" href="{{ url('enfant'); }}">Liste enfants</a></br>
    <a class="btn btn-primary mb-1 mr-1" href="{{ url('activite'); }}">Liste activités</a></br>
</p>


@endsection