@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leverancier Details</h1> <!-- Titel van de pagina voor leverancier details -->
    <table class="table">
        <tr>
            <th>Bedrijfsnaam</th> <!-- Kolomkop voor Bedrijfsnaam -->
            <td>{{ $leverancier->bedrijfsnaam }}</td> <!-- Weergave van Bedrijfsnaam -->
        </tr>
        <tr>
            <th>Adres</th> <!-- Kolomkop voor Adres -->
            <td>{{ $leverancier->adres }}</td> <!-- Weergave van Adres -->
        </tr>
        <tr>
            <th>Contactpersoon</th> <!-- Kolomkop voor Contactpersoon -->
            <td>{{ $leverancier->contactpersoon }}</td> <!-- Weergave van Contactpersoon -->
        </tr>
        <tr>
            <th>Email</th> <!-- Kolomkop voor Email -->
            <td>{{ $leverancier->email }}</td> <!-- Weergave van Email -->
        </tr>
        <tr>
            <th>Telefoonnummer</th> <!-- Kolomkop voor Telefoonnummer -->
            <td>{{ $leverancier->telefoonnummer }}</td> <!-- Weergave van Telefoonnummer -->
        </tr>
    </table>
    <a href="{{ route('leveranciers.index') }}" class="btn btn-secondary">Terug</a>
    <!-- Knop om terug te gaan naar de lijst van leveranciers -->
</div>
@endsection
