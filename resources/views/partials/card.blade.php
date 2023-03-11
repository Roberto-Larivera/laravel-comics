@foreach($comics as $comic)
<div class="col">
    
    <a href="{{ route('comic',$loop->index) }}" class="text-decoration-none">
        <div class="box w-100">
            <div class="box_image">
                <img src="{{ $comic['thumb'] }}" >
                {{-- <img src="https://picsum.photos/200/300" > --}}
            </div>
            <h3 class="text-break">{{ $comic['series'] }}</h3>
        </div>
    </a>

</div>
@endforeach