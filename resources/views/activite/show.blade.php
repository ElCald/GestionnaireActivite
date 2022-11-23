@extends('template')
@section('titre') activite {{$activites->nom}} @endsection
@section('contenu')

    
    <div class="col-lg-10">
        <strong>{{$activites->nom}}</strong>
        <p>{{$activites->description}}</p><br>
    </div>

    
    {{$activites->content}}<br/>
    <em>par {{$activites->horaire->jour}}</em><br/>
    @foreach($activites->horaire as $horaire)
        @if($loop->first)
            <b>Horaires</b> : 
        @endif

        {{$horaire->jour}}
        {{$horaire->heureDebut}}
        {{$horaire->heureFin}}

        @if(!$loop->last)
            ;
        @else
            <br/>
        @endif
    @endforeach

    <a href="{{url('activite/')}}">Retour à la liste</a>
@endsection


