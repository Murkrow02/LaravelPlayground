@extends('layouts.app')

@section('content')
<input placeholder='nome gioco' id="search-bar" value="{{$search_string}}"/>
<button onclick='search()'>
    Cerca
</button>


<div class="container my-5">
    <h1 class="text-center">Risultati</h1>
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card">
                <img
                    src="https://via.placeholder.com/300x200"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Title 1</h5>
                    <p class="card-text">
                        Description of Title 1
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img
                    src="https://via.placeholder.com/300x200"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Title 2</h5>
                    <p class="card-text">
                        Description of Title 2
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img
                    src="https://via.placeholder.com/300x200"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Title 3</h5>
                    <p class="card-text">
                        Description of Title 3
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img
                    src="https://via.placeholder.com/300x200"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Title 3</h5>
                    <p class="card-text">
                        Description of Title 3
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img
                    src="https://via.placeholder.com/300x200"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Title 3</h5>
                    <p class="card-text">
                        Description of Title 3
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img
                    src="https://via.placeholder.com/300x200"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Title 3</h5>
                    <p class="card-text">
                        Description of Title 3
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img
                    src="https://via.placeholder.com/300x200"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Title 3</h5>
                    <p class="card-text">
                        Description of Title 3
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img
                    src="https://via.placeholder.com/300x200"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Title 3</h5>
                    <p class="card-text">
                        Description of Title 3
                    </p>
                </div>
            </div>
        </div>
    </div>
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

@endsection
