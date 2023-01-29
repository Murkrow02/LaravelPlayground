<x-app-layout>


    <input placeholder='nome gioco' id="search-bar" value="{{$search_string}}"/>
    <button onclick='search()'>
        Cerca
    </button>

    <div class="container bg-green-400 md:bg-blue-400">
        <ul style="background: red">
            @for($i = 0; $i < 20; $i++)
                <li style="color: white">{{$i}}</li>
            @endfor
        </ul>
    </div>


    @if(isset($games))
{{--            @foreach($games as $game)--}}
{{--                --}}
{{--            @endforeach--}}
    @endif

    <script>



        function search(){
            window.location.search += '&key=' + document.getElementById("search-bar").value;
        }

    </script>
</x-app-layout>
