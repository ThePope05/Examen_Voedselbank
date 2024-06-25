<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <h1>{{ $klant ? 'Bewerk klant' : 'Voeg klant toe' }}</h1>

    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach

    <form action="{{ $klant ? route('klanten.update', $klant->id) : route('klanten.bewaar') }}" method="POST">
        @csrf
        @if ($klant)
        @method('PUT')
        @endif

        <label for="naam">Naam</label>
        <input type="text" name="naam" id="naam" value="{{ $klant ? $klant->naam : '' }}">

        <label for="adres">Adres</label>
        <input type="text" name="adres" id="adres" value="{{ $klant ? $klant->adres : '' }}">

        <label for="telefoonnummer">Telefoonnummer</label>
        <input type="text" name="telefoonnummer" id="telefoonnummer" value="{{ $klant ? $klant->telefoonnummer : '' }}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $klant ? $klant->email : '' }}">

        <label for="allergenen">Allergenen</label>
        <select name="allergenen[]" id="allergenen" multiple>
            @foreach ($allergenen as $allergeen)
            <option value="{{ $allergeen->id }}" @if ($klant && $klant->allergenen->contains($allergeen->id)) selected @endif>{{ $allergeen->naam }}</option>
            @endforeach
        </select>

        <label for="volwassenen">Aantal volwassenen</label>
        <input type="number" name="volwassenen" id="volwassenen" value="{{ $klant ? $klant->volwassenen : '' }}">

        <label for="kinderen">Aantal kinderen</label>
        <input type="number" name="kinderen" id="kinderen" value="{{ $klant ? $klant->kinderen : '' }}">

        <label for="babies">Aantal babies</label>
        <input type="number" name="babies" id="babies" value="{{ $klant ? $klant->babies : '' }}">

        <button type="submit">{{ $klant ? 'Bewerken' : 'Toevoegen' }}</button>
    </form>
</body>

</html>