@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leveranciers</h1>
    <a href="{{ route('leveranciers.create') }}" class="btn btn-primary">Nieuwe Leverancier</a>
    <table class="table">
        <thead>
            <tr>
                <th>Bedrijfsnaam</th>
                <th>Adres</th>
                <th>Contactpersoon</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leveranciers as $leverancier)
            <tr>
                <td>{{ $leverancier->bedrijfsnaam }}</td>
                <td>{{ $leverancier->adres }}</td>
                <td>{{ $leverancier->contactpersoon }}</td>
                <td>{{ $leverancier->email }}</td>
                <td>{{ $leverancier->telefoonnummer }}</td>
                <td>
                    <a href="{{ route('leveranciers.show', $leverancier->id) }}" class="btn btn-info">Bekijk</a>
                    <a href="{{ route('leveranciers.edit', $leverancier->id) }}" class="btn btn-warning">Bewerk</a>
                    <form action="{{ route('leveranciers.destroy', $leverancier->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
