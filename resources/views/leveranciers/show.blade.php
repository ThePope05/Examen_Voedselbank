@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leverancier Details</h1>
    <table class="table">
        <tr>
            <th>Bedrijfsnaam</th>
            <td>{{ $leverancier->bedrijfsnaam }}</td>
        </tr>
        <tr>
            <th>Adres</th>
            <td>{{ $leverancier->adres }}</td>
        </tr>
        <tr>
            <th>Contactpersoon</th>
            <td>{{ $leverancier->contactpersoon }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $leverancier->email }}</td>
        </tr>
        <tr>
            <th>Telefoonnummer</th>
            <td>{{ $leverancier->telefoonnummer }}</td>
        </tr>
    </table>
    <a href="{{ route('leveranciers.index') }}" class="btn btn-secondary">Terug</a>
</div>
@endsection
