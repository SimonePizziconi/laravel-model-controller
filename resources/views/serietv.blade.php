{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>Serie Tv</h1>
        <div class="container my-5 d-flex flex-wrap gap-3">
            @foreach ($series as $serie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $serie->title }}</h5>
                        <p class="card-text">{{ $serie->description }}</p>
                        <a href="{{ route('details', ['id' => $serie->id]) }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('titlePage')
    Serie tv
@endsection
