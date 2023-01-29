<x-app-layout>

    @foreach($user_games as $game)
        <h1 style="color: white">{{$game->title}}</h1>
    @endforeach

</x-app-layout>
