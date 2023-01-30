@extends('layouts.app')

@section('content')

<h1 class="text-center">I tuoi giochi</h1>

{{--Results list--}}
<div class="container my-5">
    @foreach($categories as $category)
    {{-- Check if there are any games for this category--}}
        @if(count($category[1]) > 0)
            <h3>{{$category[0]}}</h3>
            <hr/>
            <div class="row">
                @foreach($category[1] as $game)
                    <x-gamecell name="{{$game->title}}" image="{{$game->img}}" desc="{{$game->rating}}/5" id="{{$game->id}}" action="library/{{$game->id}}" method="PUT" rating="{{$game->rating}}" deletable="true"/>
                @endforeach
            </div>
        @endif
    @endforeach
</div>
@endsection
