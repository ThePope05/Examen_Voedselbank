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

        .success-message {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 10px;
            margin-top: 10px;
        }

        .create-button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Voorraad Overzicht / Verwijderen</h1>
    @if (session('success'))
    <div class="success-message" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('voorraad.create') }}" class="create-button">Create New Product</a>
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
                <td>{{ $item->categorie->naam }}</td>
                <td>{{ $item->voorraad }}</td>
                <td>{{ $item->leverancier->bedrijfsnaam }}</td>
                <td><a href="{{ route('voorraad.edit', $item->id) }}">✏️</a></td>
                <td>
                    <form id="delete-form-{{ $item->id }}" action="{{ route('voorraad.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDelete('{{ $item->id }}')">❌</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 3000);

        function confirmDelete(itemId) {
            if (confirm('Are you sure you want to delete this product?')) {
                document.getElementById('delete-form-' + itemId).submit();
            }
        }
    </script>
</body>

</html>