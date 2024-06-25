<!DOCTYPE html>
<html>

<head>
    <title>Edit Inventory Item</title>
</head>

<body>
    <h1>Edit Item</h1>
    <form action="{{ route('inventory.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" value="{{ $item->naam }}">
        <br>
        <label for="categorie">Categorie:</label>
        <input type="text" id="categorie" name="categorie" value="{{ $item->categorie }}">
        <br>
        <label for="voorraad">Voorraad:</label>
        <input type="number" id="voorraad" name="voorraad" value="{{ $item->voorraad }}">
        <br>
        <label for="leverancier">Leverancier:</label>
        <input type="text" id="leverancier" name="leverancier" value="{{ $item->leverancier }}">
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>