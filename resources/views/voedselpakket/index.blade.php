@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Voedselpakketten</h1>
        <a href="{{ route('voedselpakket.create') }}" class="btn btn-primary">Nieuwe voedselpakket</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Klant</th>
                    <th>Gemaakt door</th>
                    <th>Gemaakt op</th>
                    <th>Uitgiftedatum</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voedselpakketten as $voedselpakket)
                    <tr>
                        <td>{{ $voedselpakket->klant_id }}</td>
                        <td>{{ $voedselpakket->gemaakt_door_id }}</td>
                        <td>{{ $voedselpakket->created_at }}</td>
                        <td>{{ $voedselpakket->uitgiftedatum }}</td>
                        <td>
                            <a href="{{ route('voedselpakket.edit', $voedselpakket->id) }}" class="btn btn-warning">Bewerk</a>
                            <form action="{{ route('voedselpakket.destroy', $voedselpakket->id) }}" method="POST"
                                style="display:inline-block;">
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
