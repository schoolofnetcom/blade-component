@extends('layouts.app')

@section('content')

    <h1>Trabalhando com SLOTS</h1>

    <x-card>
        <x-slot name="title">
            Card title
        </x-slot>
        <x-slot name="subtitle">
            Card subtitle
        </x-slot>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </x-card>

@endsection
