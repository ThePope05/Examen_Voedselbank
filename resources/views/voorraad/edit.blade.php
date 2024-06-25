<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="{{ route('voorraad.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" value="{{ $item->naam }}" required>
        <br>
        <label for="categorie_id">Categorie:</label>
        <select id="categorie_id" name="categorie_id" required>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if ($item->categorie_id == $category->id) selected @endif>{{ $category->naam }}</option>
            @endforeach
        </select>
        <br>
        <label for="streepjescode">Streepjescode:</label>
        <input type="text" id="streepjescode" name="streepjescode" value="{{ $item->streepjescode }}" required>
        <br>
        <label for="voorraad">Voorraad:</label>
        <input type="number" id="voorraad" name="voorraad" value="{{ $item->voorraad }}" required>
        <br>
        <label for="leverancier_id">Leverancier:</label>
        <select id="leverancier_id" name="leverancier_id" required>
            @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->id }}" @if ($item->leverancier_id == $supplier->id) selected @endif>{{ $supplier->bedrijfsnaam }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Update Product</button>
    </form>
</body>

</html>