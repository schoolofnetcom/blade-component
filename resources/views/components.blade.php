@extends('layouts.app')

@section('content')

    <h1>Passando parâmetros para o componente</h1>

    <x-alert type="info" message="Alert Info"/>
    <x-alert type="danger" message="Alert danger"/>
    <x-alert type="success" message="Alert success"/>

@endsection
