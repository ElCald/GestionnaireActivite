@extends('layouts/templateBULMA')
@section('titre') Enfant {{$enfants->nom}} @endsection

@section('content')
<!-- DEBUT DE LA CARTE ENFANT -->
<div class='mt-6 mb-6 container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-9'>

                <div class="card">
                    <div class='card-header has-background-link'>
                        <div class="card-header-title is-justify-content-center has-text-white">
                            {{$enfants->nom}}
                            {{$enfants->prenom}}
                        </div>
                    </div>
                    <div class="card-content">
                        <strong>{{$enfants->date}}</strong>
                        <em>Tuteur : {{$enfants->user->name}}</em>
                    </div>



                    <div class="card-content bordure">
                        @foreach($enfants->activite as $activites)


                            <p class="card-footer-item ">
                                <span>
                                    <strong> {{$activites->nom}}  </strong><br>
                                        {{$activites->description}} 
                                </span>
                            </p>

                            @foreach($activites->horaire as $horaires)
                                <p>{{$horaires->jour}} : {{$horaires->journee}}</p><br/>
                            @endforeach
                            

                        @endforeach
                    </div>
                </div>
            </a>
        </div>
    </div>
    <a class="button has-background-link has-text-white" href="{{url('enfant/')}}">Retour à la liste</a>
</div>
<!-- FIN DE LA CARTE ENFANT -->

<style>
    .bordure{
        border-color: blue ;
    }
</style>
@endsection

    


