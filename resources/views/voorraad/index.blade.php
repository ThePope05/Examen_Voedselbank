<!DOCTYPE html>
<html>

<head>
    <title>Voorraad Overzicht</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Voorraad Overzicht / Verwijderen</h1>
    <table>
        <thead>
            <tr>
                <th>NAAM</th>
                <th>CATEGORIE</th>
                <th>VOORRAAD</th>
                <th>LEVERANCIER</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->naam }}</td>
                <td>{{ $item->categorie }}</td>
                <td>{{ $item->voorraad }}</td>
                <td>{{ $item->leverancier }}</td>
                <td><a href="{{ route('inventory.edit', $item->id) }}">✏️</a></td>
                <td>
                    <form action="{{ route('inventory.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">❌</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>