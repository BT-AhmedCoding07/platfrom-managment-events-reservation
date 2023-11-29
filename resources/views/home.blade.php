@extends('layouts.app')

@section('content')

<h1>Bienvenue  {{auth()->user()->name}}, vous êtes dans votre espace  {{auth()->user()->role_id}} </h1>

@endsection