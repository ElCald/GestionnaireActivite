@extends('template')
@section('titre') Liste des activités @endsection


@section('contenu')

    @if(Auth::user()->admin==true)
    <div class="d-flex justify-content-left">
        <a href="{{route('activite.create')}}" class="btn btn-sm btn-primary mb-1">
            Ajouter un activite
        </a>
    </div>
    @endif

    <ul class="list-group">
@foreach($activitesList as $activites)
    <li class="list-group-item d-flex align-items-center">
        
        <div class="col-lg-10">
            <span class="badge rounded-pill bg-primary">
            </span>

            <strong>{{$activites->nom}}</strong>
            <p>{{$activites->description}}</p>
           

        </div>     

        @if(Auth::user()->admin==true)
        <div class="col text-end"><!-- Bouton Consulter, modifier, supprimer-->
            <a href="{{route('activite.show', $activites->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
            
            <a href="{{route('activite.edit',$activites->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-pencil-square"></i></a>

            <button type="submit" formaction="{{route('activite.destroy', $activites->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1"><i class="bi bi-trash"></i></button>
        </div>
        @endif

        
    </li>
@endforeach
    </ul>
    @if(Auth::user()->admin==true)
    <form id="deleteForm" action="" method="POST">
        @method('DELETE')
        @csrf
    </form>
    @endif

    <a href="{{url('/')}}">Retour</a>

@endsection

