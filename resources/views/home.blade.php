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
                    <div class="series_boxs">
                        @foreach($comics as $comic)
                        <div class="box">
                            <div class="box_image">
                                {{-- <img src="{{ $comic['thumb'] }}" > --}}
                                <img src="https://picsum.photos/200/300" >
                            </div>
                            <h3>{{ $comic['series'] }}</h3>
                        </div>
                        @endforeach
                    </div>
                    <button>load more</button>
                </div>
            </div>
        </div>
    </main>
@endsection