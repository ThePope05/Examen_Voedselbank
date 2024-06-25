@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leveranciers</h1> <!-- Titel van de pagina voor leveranciers -->
    <a href="{{ route('leveranciers.create') }}" class="btn btn-primary">Nieuwe Leverancier</a>
    <!-- Knop om een nieuwe leverancier toe te voegen -->

    <table class="table">
        <thead>
            <tr>
                <th>Bedrijfsnaam</th> <!-- Kolomkop voor Bedrijfsnaam -->
                <th>Adres</th> <!-- Kolomkop voor Adres -->
                <th>Contactpersoon</th> <!-- Kolomkop voor Contactpersoon -->
                <th>Email</th> <!-- Kolomkop voor Email -->
                <th>Telefoonnummer</th> <!-- Kolomkop voor Telefoonnummer -->
                <th>Acties</th> <!-- Kolomkop voor Acties -->
            </tr>
        </thead>
        <tbody>
            @foreach ($leveranciers as $leverancier)
            <tr>
                <td>{{ $leverancier->bedrijfsnaam }}</td> <!-- Weergave van Bedrijfsnaam -->
                <td>{{ $leverancier->adres }}</td> <!-- Weergave van Adres -->
                <td>{{ $leverancier->contactpersoon }}</td> <!-- Weergave van Contactpersoon -->
                <td>{{ $leverancier->email }}</td> <!-- Weergave van Email -->
                <td>{{ $leverancier->telefoonnummer }}</td> <!-- Weergave van Telefoonnummer -->
                <td>
                    <!-- <a href="{{ route('leveranciers.show', $leverancier->id) }}" class="btn btn-info">Bekijk</a> -->
                    <!-- Knop om details van de leverancier te bekijken -->
                    <a href="{{ route('leveranciers.edit', $leverancier->id) }}" class="btn btn-warning">Bewerk</a>
                    <!-- Knop om de leverancier te bewerken -->
                    <form action="{{ route('leveranciers.destroy', $leverancier->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>
                    <!-- Formulier en knop om de leverancier te verwijderen -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
