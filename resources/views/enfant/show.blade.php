@extends('template')
@section('titre') Enfant {{$enfants->prenom}} @endsection
@section('contenu')

    
    <div class="col-lg-10">
        <strong>{{$enfants->nom}}</strong>
        <strong>{{$enfants->prenom}}</strong><br>
        <strong>{{$enfants->date}}</strong>
        <em>Tuteur : {{$enfants->user->name}}</em>
    </div>

    <ul class="list-group">
        <em> Listes des activités de {{$enfants->prenom}}</em>
        @foreach($enfants->activite as $activites)
            <li class="list-group-item d-flex align-items-center">
                
                <div class="col-lg-10">
        
                    <p>{{$activites->nom}}</p>
                    <p>{{$activites->description}} </p>

                    @foreach($activites->horaire as $horaires)
                        <p>{{$horaires->jour}} : {{$horaires->heureDebut}} | {{$horaires->heureFin}}</p>
                    @endforeach
        
                </div>
                
            </li>
        @endforeach
            </ul> 

    <div>

        <form action={{url('enfant', $enfants->id)}} method='get'>
            <ul class="list-group">
                @foreach($activite as $activite)
                    <p>{{$activite->nom}}</p>
                    
                @endforeach
            </ul>

            

            <button type="submit">Valider</button>
        </form>

    </div>

    

    <a href="{{url('enfant/')}}">Retour à la liste</a>
@endsection


