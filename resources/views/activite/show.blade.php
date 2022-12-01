@extends('template')
@section('titre') activite {{$activites->nom}} @endsection
@section('contenu')

    
    <div class="col-lg-10">
        <strong>{{$activites->nom}}</strong>
        <p>{{$activites->description}}</p>
        <p>Nombre places : {{$activites->taille}}</p>
    </div>

    @foreach($activites->horaire as $horaire)
        @if($loop->first)
            <b>Horaires</b> : <br/>
        @endif

        {{$horaire->jour}}
        {{$horaire->heureDebut}} |
        {{$horaire->heureFin}}<br/>
        
    @endforeach

    <a href="{{url('activite/')}}">Retour à la liste</a>
@endsection


