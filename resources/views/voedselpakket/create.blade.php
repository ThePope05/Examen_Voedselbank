@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nieuwe voedselpakket</h1>
        <form action="{{ route('voedselpakket.store') }}" method="POST">
            @csrf
            @include('voedselpakket.form')
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
