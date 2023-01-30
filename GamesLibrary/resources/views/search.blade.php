@extends('layouts.app')

@section('content')


<style>
    .center-div {
        display: flex;
        flex-direction: column;
        align-items: center;
        @if(!isset($games) || count($games) == 0)
        height: 90vh;
        @endif
        justify-content: center;
        margin: 0 20px;
    }

    .big-title{
        margin-bottom: 20px;
    }
</style>

{{--Search Bar--}}
<div class="center-div">
    <h1 class="big-title">Cerca un gioco da aggiungere alla tua libreria</h1>
    <div class="input-group" style="max-width: 500px;">
        <input id="search-bar" value="{{$search_string}}" type="search" class="form-control" placeholder="Cerca tra i giochi...">
        <button onclick="search()" id="search-button" type="button" class="btn btn-primary">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

{{--Results list--}}
@if(isset($games) && count($games) > 0)
<div class="container my-5">
    <h1 class="text-center">Risultati</h1>
    <div class="row">
        @foreach($games as $game)

            @php
                //Array to string
                $platform_names = "";
                foreach($game->platforms as $platform)
                    $platform_names .= $platform->platform->name .= " ";
            @endphp

            <x-gamecell name="{{$game->name}}" image="{{$game->background_image}}" desc="{{$platform_names}}" id="{{$game->id}}" action="search" method="POST"/>
        @endforeach
    </div>
</div>
@endif

<script>
    function search(){
        let searchParams = new URLSearchParams(window.location.search);
        searchParams.set("key", document.getElementById("search-bar").value);
        window.location.search = searchParams.toString();
    }
</script>

@endsection
