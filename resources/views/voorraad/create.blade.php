<!DOCTYPE html>
<html>

<head>
    <title>Create New Product</title>
</head>

<body>
    <h1>Create New Product</h1>
    <form action="{{ route('voorraad.store') }}" method="POST">
        @csrf

        {{-- Display validation errors --}}
        @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" value="{{ old('naam') }}" required>
        <br>
        <label for="categorie_id">Categorie:</label>
        <select id="categorie_id" name="categorie_id" required>
            <option value="">Selecteer een categorie</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('categorie_id') == $category->id ? 'selected' : '' }}>
                {{ $category->naam }}
            </option>
            @endforeach
        </select>
        <br>
        <label for="streepjescode">Streepjescode:</label>
        <input type="text" id="streepjescode" name="streepjescode" value="{{ old('streepjescode') }}" required>
        <br>
        <label for="voorraad">Voorraad:</label>
        <input type="number" id="voorraad" name="voorraad" value="{{ old('voorraad') }}" required>
        <br>
        <label for="leverancier_id">Leverancier:</label>
        <select id="leverancier_id" name="leverancier_id" required>
            <option value="">Selecteer een leverancier</option>
            @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->id }}" {{ old('leverancier_id') == $supplier->id ? 'selected' : '' }}>
                {{ $supplier->bedrijfsnaam }}
            </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Create Product</button>
    </form>
</body>

</html>