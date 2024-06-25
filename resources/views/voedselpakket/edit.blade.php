@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerk Voedselpakket</h1>
        <form action="{{ route('voedselpakket.update', $voedselpakketten->id) }}" method="POST">
            @csrf
            <!-- Methode aanduiding voor het bijwerken van een bestaand item -->
            @method('PUT')
            <!-- Inclusie van het formulier voor het voedselpakket -->
            @include('voedselpakket.form')
            <!-- Knop om het bijwerken van het voedselpakket te bevestigen -->
            <button type="submit" class="btn btn-primary">Bijwerken</button>
        </form>
    </div>
@endsection
