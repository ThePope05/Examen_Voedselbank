@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bewerk Leverancier</h1> <!-- Titel van de pagina voor het bewerken van een leverancier -->
    <form action="{{ route('leveranciers.update', $leverancier->id) }}" method="POST">
        @csrf <!-- CSRF-beveiliging -->

        @method('PUT') <!-- Methode voor het bijwerken van de gegevens -->

        @include('leveranciers.form') <!-- Inclusie van het formulier voor leveranciers -->

        <button type="submit" class="btn btn-primary">Bijwerken</button> <!-- Knop om het formulier bij te werken -->
    </form>
</div>
@endsection
