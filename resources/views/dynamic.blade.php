@extends('layouts.app')

@section('content')

    <h1>Componentes Dinâmicos</h1>

    <x-dynamic-component :component="$component" />

@endsection
