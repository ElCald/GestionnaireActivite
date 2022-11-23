@extends('template')
@section('titre') Liste enfants @endsection



@section('contenu')

    @auth
    <div class="d-flex justify-content-left">
        <a href="{{route('enfant.create')}}" class="btn btn-sm btn-primary mb-1">
            Ajouter un enfant
        </a>
    </div>

    <ul class="list-group">
@foreach($enfantsList as $enfants)
    <li class="list-group-item d-flex align-items-center">
        
        <div class="col-lg-10">
            <span class="badge rounded-pill bg-primary">
            </span>

            <strong>{{$enfants->nom}} {{$enfants->prenom}}</strong>
            <p>{{$enfants->date}} <em>Tuteur : {{$enfants->user->name}}</em> </p>

        </div>     
        
        @if(Auth::user()->admin==true)
        <div class="col text-end"><!-- Bouton Consulter, modifier, supprimer-->
            <a href="{{route('enfant.show', $enfants->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
            
            <a href="{{route('enfant.edit',$enfants->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-pencil-square"></i></a>

            <button type="submit" formaction="{{route('enfant.destroy', $enfants->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1"><i class="bi bi-trash"></i></button>
        </div>
        @endif
        
    </li>
@endforeach
    </ul>

    <form id="deleteForm" action="" method="POST">
        @method('DELETE')
        @csrf
    </form>

    <a href="{{url('/')}}">Retour</a>
    @endauth
@endsection

