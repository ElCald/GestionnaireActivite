@extends('template')
@section('titre') Enfant {{$enfants->nom}} @endsection
@section('contenu')

    
    <div class="col-lg-10">
        <strong>{{$enfants->nom}}</strong>
        <strong>{{$enfants->prenom}}</strong><br>
        <strong>{{$enfants->date}}</strong>
        <em>Tuteur : {{$enfants->user->name}}</em>
    </div>

    <ul class="list-group">
        @foreach($enfants->activite as $activites)
            <li class="list-group-item d-flex align-items-center">
                
                <div class="col-lg-10">
        
                    <p>{{$activites->nom}}</p>
                    <p>{{$activites->description}} </p>
        
                </div>
                
            </li>
        @endforeach
            </ul> 

    <div>

        <form action={{url('enfant', $enfants->id)}} method='POST'>

            

            <button type="submit">Valider</button>
        </form>

    </div>

    

    <a href="{{url('enfant/')}}">Retour à la liste</a>
@endsection


