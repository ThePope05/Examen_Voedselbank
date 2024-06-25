@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('success'))
    <div class="success-message" id="successMessage">
        {{ session('success') }}
    </div>
    @endif

    <script>
        // JavaScript om het bericht te laten verdwijenen na 3 sec
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>


    <h1>Voedselpakketten</h1> <!-- Titel van de pagina -->
    <a href="{{ route('home') }}">back</a>
    <a href="{{ route('voedselpakket.create') }}" class="btn btn-primary">Nieuwe voedselpakket</a>
    <!-- Link om een nieuw voedselpakket toe te voegen -->
    <table class="table">
        <thead>
            <tr>
                <th>Klant</th> <!-- Kolomkop voor Klant -->
                <th>Gemaakt door</th> <!-- Kolomkop voor Gemaakt door -->
                <th>Gemaakt op</th> <!-- Kolomkop voor Gemaakt op -->
                <th>Uitgiftedatum</th> <!-- Kolomkop voor Uitgiftedatum -->
                <th>Acties</th> <!-- Kolomkop voor Acties -->
            </tr>
        </thead>
        <tbody>
            @foreach ($voedselpakketten as $voedselpakket)
            <tr>
                <td>{{ $voedselpakket->klant->naam }}</td> <!-- Weergave van Klantnaam -->
                <td>{{ $voedselpakket->gemaaktDoor->naam }}</td> <!-- Weergave van Gemaakt door naam -->
                <td>{{ $voedselpakket->created_at }}</td> <!-- Weergave van aanmaakdatum -->
                <td>{{ $voedselpakket->uitgiftedatum }}</td> <!-- Weergave van uitgiftedatum -->
                <td>
                    <a href="{{ route('voedselpakket.edit', $voedselpakket->id) }}" class="btn btn-warning"><i class='bx bx-pencil'></i></a> <!-- Knop voor bewerken met pictogram -->
                    <form action="{{ route('voedselpakket.destroy', $voedselpakket->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                        <!-- Knop voor verwijderen met pictogram -->
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection