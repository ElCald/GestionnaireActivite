@extends('layouts/templateBULMA')


@section('titre')
Plus Ultra - Playing arena club
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
@auth
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
@endauth
@endsection


