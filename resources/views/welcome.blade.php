@extends('layouts.app') <!-- Étend le layout principal -->



@section('header')
    @include('components.header') <!-- Inclut header ici -->
@endsection

@section('content')
    <h1>Bienvenue Chez Cookie Lab' !</h1> <!-- Contenu principal pour tester -->
    <p> super phrase méga longue pour la présentation ou je sais pas quoi</p>
@endsection

@section('footer')
    @include('components.footer') <!-- Inclut footer ici -->
@endsection