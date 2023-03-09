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
                    <div class="series_cards">
                        {{-- <AppMainCurrentCard :src="element.thumb" :title="element.series" v-for="(element, index) in seriesData" @click="openInfo(index)" /> --}}
                    </div>
                    <button>load more</button>
                </div>
            </div>
            {{-- <div>
                <div class="container">
                    <AppMainCardInfo :src="seriesData[currentBook].thumb" :title="seriesData[currentBook].series"
                        :price="seriesData[currentBook].price" :type="seriesData[currentBook].type" />
                </div>
    
            </div> --}}
        </div>
    </main>
@endsection