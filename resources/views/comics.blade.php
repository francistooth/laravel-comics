{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5 d-flex flex-wrap gap-5">
    @foreach ($comics as $card)
        <div class="card bg-info-500 text-center" style="width:18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $card['title'] }}, {{ $card['price'] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted"> {{ $card['type'] }} </h6>
                <img src="{{ $card['thumb'] }}" class="card-img-top" alt="...">
                <p class="card-text fs-6 mt-3"> {{ $card['description'] }} </p>
            </div>
        </div>
    @endforeach

    {{-- @if ($boolean)
        <div class="card bg-info-500 text-center" style="width:18rem;">
            <img src="{{ $boolcard['src'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $boolcard['name'] }}, {{ $boolcard['age'] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted"> {{ $boolcard['job'] }} </h6>
                <p class="card-text"> {{ $boolcard['desc'] }} </p>
            </div>
        </div>
    @endif --}}
</div>
@endsection


@section('titlePage')
    fumetti
@endsection
