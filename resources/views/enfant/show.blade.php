@extends('template')
@section('titre') Enfant {{$enfants->nom}} @endsection
@section('contenu')

    
    <div class="col-lg-10">
        <strong>{{$enfants->nom}}</strong>
        <strong>{{$enfants->prenom}}</strong><br>
        <strong>{{$enfants->date}}</strong>
        <em>Tuteur : {{$enfants->user->name}}</em>
    </div>

    <div>
        <form action=none>

            <!--foreach-->
            <label for="act1">Nom activite</label>
            <input type="checkbox" id="act1"/>

            <!--endforeach-->
            <button type="submit">Valider</button>
        </form>

    </div>

    <!-- <ul class="list-group">
        {{--@foreach($enfants->activite as $activites)
            <li class="list-group-item d-flex align-items-center">
                
                <div class="col-lg-10">
        
                    <strong>{{$activites->nom}}</strong>
                    <p>{{$activites->description}} </p>
        
                </div>
                
            </li>
        @endforeach--}}
            </ul> -->   

    <a href="{{url('enfant/')}}">Retour à la liste</a>
@endsection


