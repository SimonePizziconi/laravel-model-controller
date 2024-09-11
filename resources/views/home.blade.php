{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>Film</h1>
        <div class="container my-5 d-flex flex-wrap gap-3">
            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Lingua originale: {{ $movie->nationality }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Data di uscita: {{ $movie->date }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Voto: {{ $movie->vote }}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('titlePage')
    Film
@endsection
