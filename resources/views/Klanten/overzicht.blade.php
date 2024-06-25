<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <h1>Overzicht klanten</h1>
    <a href="{{ route('home') }}">back</a>

    <a href="{{ route('klanten.nieuw') }}">Klant toevoegen</a>

    @if (session('success'))
    <p class="session-message">{{ session('success') }}</p>
    @endif

    @if (session('error'))
    <p class="session-message">{{ session('error') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Adres</th>
                <th>Telefoonnummer</th>
                <th>Email</th>
                <th>Volwassenen</th>
                <th>Kinderen</th>
                <th>Babies</th>
                <th>Allergenen</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($klanten as $klant)
            <tr>
                <td>{{ $klant->naam }}</td>
                <td>{{ $klant->adres }}</td>
                <td>{{ $klant->telefoonnummer }}</td>
                <td>{{ $klant->email }}</td>
                <td>{{ $klant->volwassenen }}</td>
                <td>{{ $klant->kinderen }}</td>
                <td>{{ $klant->babies }}</td>
                <td>
                    @php $allergenen = $klant->allergenen->pluck('naam')->toArray(); @endphp
                    {{ implode(', ', $allergenen) }}
                </td>
                <td>
                    <a href="{{ route('klanten.bewerk', $klant->id) }}">Bewerken</a>
                    <form action="{{ route('klanten.verwijder', $klant->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        const sessionMessage = document.querySelector('.session-message');

        if (sessionMessage) {
            setTimeout(() => {
                sessionMessage.remove();
            }, 3000);
        }
    </script>
</body>

</html>