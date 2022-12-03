@extends('layouts/templateBULMA')
@section('titre') Activite {{$activites->nom}} @endsection
@section('content')


<!-- DEBUT DE LA CARTE ACTIVITE -->
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
                        <p class='is-succes'>
                            Nombre places : {{$activites->taille}}
                        </p>
                    </div>


                    
                    <footer class="card-footer bordure">
                        @foreach($activites->horaire as $horaire)

                        
                        <p class="card-footer-item">
                            <span>
                                {{$horaire->jour}}
                                {{$horaire->journee}}<br />
                                <button type="submit" formaction="{{route('horaire.destroy', $horaire->id)}}" form="deleteForm" class="button is-link">Supp</button>
                            </span>
                        </p>

                        @endforeach
                    </footer>
                </div>
            </a>
        </div>
    </div>
    <a class="button has-background-link has-text-white" href="{{url('activite/')}}">Retour à la liste</a>
</div>
<!-- FIN DE LA CARTE ACTIVITE -->

<style>
    .bordure{
        border-color: blue ;
    }
</style>
@endsection


