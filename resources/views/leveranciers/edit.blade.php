@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bewerk Leverancier</h1>
    <form action="{{ route('leveranciers.update', $leverancier->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('leveranciers.form')
        <button type="submit" class="btn btn-primary">Bijwerken</button>
    </form>
</div>
@endsection
