@extends('layout.app')

@section('head_title')
    {{ $comics['series'] }}
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}
    <main>
        <div class="main_jumbotron">
        </div>
        <div class="main_current__series">
            <div>
                <div class="container">
                    <div class="title-section">
                        <h2>current series</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 comic_series">
                        <div class="col order-2 order-md-1">
                            <div class="card h-100">
                                <div class="card-body text-light">
                                    <h5 class="card-title">{{ $comics['series'] }}</h5>
                                    <h6 class="card-subtitle  mb-3 text-muted">{{ $comics['title'] }}</h6>

                                    <div class="mb-3">
                                        <span class="me-3">
                                            {{ $comics['sale_date'] }}
                                        </span>
                                        <span class="badge bg-success">
                                            {{ $comics['type'] }}
                                        </span>
                                    </div>

                                    <span class="fwbold">Description<br> </span>
                                    <p class="card-text">{{ $comics['description'] }}</p>


                                    <p class="card-text">
                                        <span class="fwbold">Writers<br> </span> {{ implode(', ', $comics['writers']) }}
                                    </p>
                                    <a class="btn btn-success disabled" href="#" role="button" aria-disabled="true">Acquista</a>
                                    <a class="btn btn-outline-info" href="{{ route('home') }}" role="button">Indietro</a>
                                </div>
                            </div>
                        </div>
                        <div class="col order-1 order-md-2 mb-5 mb-md-0">
                            <img src="{{ $comics['thumb'] }}" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
