@extends('layouts/templateBULMA')



@section('titre')
LISTE DES ACTIVITÉS
@endsection

@section('content')
<div class='columns text is-flex is-flex-wrap-wrap'>
    @foreach($activitesList as $activites)
    <!-- DEBUT DE LA CARTE ACTIVITE EX : AQUA PONEY -->
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
                        
                        @auth
                        <!-- Admin uniquement -->
                        @if(Auth::user()->admin==true)
                            <button type="submit" formaction="{{route('activite.destroy', $activites->id)}}" form="deleteForm" class="button is-link">Supp</button>
                            <a href="{{route('activite.edit',$activites->id)}}" class="button is-link">Edit</a>
                        @endif
                        @endauth
                    </div>
                    


                    {{--<div class="card-content">
                        <p class='is-succes'>
                            @foreach($activites->horaire as $horaire)
                                @if($loop->first)
                                    <b>Horaires</b> : <br/>
                                @endif

                                {{$horaire->jour}}
                                {{$horaire->heureDebut}} |
                                {{$horaire->heureFin}}<br/>
                                
                            @endforeach
                        </p>
                    </div>--}}
                    <div>
                        <footer class="card-footer is-flex is-justify-content-center has-background-link">
                            {{--<div class="mt-4 mb-2 buttons">
                                <button class="button is-white has-text-link">S'inscrire</button>
                            </div>--}}
                        </footer>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <!-- FIN DE LA CARTE ACTIVITE -->
    @endforeach
</div>


@auth
@if(Auth::user()->admin==true)
<form id="deleteForm" action="" method="POST">
    @method('DELETE')
    @csrf
</form>
@endif
@endauth


@endsection