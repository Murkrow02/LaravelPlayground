@extends('layouts.app')

@section('content')

{{--Keep original image ratio--}}
<style>
    .card-img-top {
        height: 200px !important;
        object-fit: cover !important;
    }
</style>

{{--Search Bar--}}
<input placeholder='nome gioco' id="search-bar" value="{{$search_string}}"/>
<button onclick='search()'>
    Cerca
</button>

{{--Results list--}}
<div class="container my-5">
    <h1 class="text-center">Risultati</h1>
    <div class="row">
        @if(isset($games))
            @foreach($games as $game)
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{{$game->background_image}}" class="card-img-top" alt="..."/>
                        <div class="card-body">
                            <h5 class="card-title">{{$game->name}}</h5>
                            <p class="card-text fw-bold">
                                @if(isset($game->platforms))
                                    @foreach($game->platforms as $platform)
                                        {{$platform->platform->name}}
                                    @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
</div>

<script>
    function search(){
        let searchParams = new URLSearchParams(window.location.search);
        searchParams.set("key", document.getElementById("search-bar").value);
        window.location.search = searchParams.toString();
    }
</script>

@endsection
