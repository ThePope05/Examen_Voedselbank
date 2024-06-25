@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerk Voedselpakket</h1>
        <form action="{{ route('voedselpakket.update', $voedselpakketten->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('voedselpakket.form')
            <button type="submit" class="btn btn-primary">Bijwerken</button>
        </form>
    </div>
@endsection
