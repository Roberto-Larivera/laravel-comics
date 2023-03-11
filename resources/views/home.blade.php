@extends('layout.app') {{-- estende in layout  --}}


@section('head_title') Home @endsection {{-- segnaposto dentro head  --}}

@section('body_main') {{-- segnaposto dentro body  --}}
    <main>
        <div class="main_jumbotron">
        </div>
        <div class="main_current__series">
            <div>
                <div class="container">
                    <div class="title-section">
                        <h2>current series</h2>
                    </div>
                    <div class="series_boxs row row-cols-6 gx-4 gy-4">
                        {{-- Include di Card --}}
                       @include('partials.card')
                    </div>
                    <button>load more</button>
                </div>
            </div>
        </div>
    </main>
@endsection