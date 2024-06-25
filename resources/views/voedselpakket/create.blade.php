@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nieuw voedselpakket</h1>
        <!-- Formulier om een nieuw voedselpakket aan te maken -->
        <form action="{{ route('voedselpakket.store') }}" method="POST">
            @csrf
            <!-- Includeren van het formuliergedeelte voor voedselpakketten -->
            @include('voedselpakket.form')
            <!-- Opslaan knop voor het verzenden van het formulier -->
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
