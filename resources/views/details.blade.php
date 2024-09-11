{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>Dettagli</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $serie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Anno di uscita: {{ $serie->release_year }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">Stagioni: {{ $serie->seasons }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">Episodi: {{ $serie->episodes }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">Voto: {{ $serie->rating }}</h6>
            </div>
        </div>
    </div>
@endsection

@section('titlePage')
    Dettagli
@endsection
