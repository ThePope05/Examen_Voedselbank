@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nieuwe Leverancier</h1>
    <form action="{{ route('leveranciers.store') }}" method="POST">
        @csrf
        @include('leveranciers.form') <!-- Inclusie van het formulier voor leveranciers -->

        <!-- Knop om het formulier op te slaan -->
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</div>
@endsection
