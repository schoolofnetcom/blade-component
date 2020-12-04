@extends('layouts.app')

@section('content')

    <h1>Componentes Anônimos</h1>
    @php
        $items = ['Thiago', 'Luiz', 'Wesley'];
    @endphp
    <x-list :items="['Thiago', 'Luiz', 'Wesley']" data="javascript"/>

@endsection
