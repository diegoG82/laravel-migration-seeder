@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Treni in partenza oggi</h1>
        <h2 class="text-center">Oggi è il {{ $today }}</h2>
        <div class="row row-cols-5">
            @foreach ($trains as $train)
                <div class="col mb-1 mt-2">
                    <div class="card mt-2 mb-2">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }}</h5>
                            <p class="card-text">Data treno: {{ $train->data_treno }}</p>
                            <p class="card-text">Stazione partenza: {{ $train->stazione_partenza }}</p>
                            <p class="card-text">Stazione arrivo: {{ $train->stazione_arrivo }}</p>
                            <p class="card-text">Orario partenza: {{ $train->orario_partenza }}</p>
                            <p class="card-text">Orario arrivo: {{ $train->orario_arrivo }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endsection
