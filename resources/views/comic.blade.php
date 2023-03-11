@extends('layout.app')

@section('head_title') {{ $comics['series'] }} @endsection {{-- segnaposto dentro head  --}}

@section('body_main') {{-- segnaposto dentro body  --}}
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-break">{{ $comics['series'] }}</h3>
                </div>
                <div class="col">
                    <img src="{{ $comics['thumb'] }}" >
                </div>
            </div>
        </div>
    </main>
@endsection