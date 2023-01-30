<div class="col-md-4 mb-5" onclick="game_details('{{$name}}','{{$image}}','{{$desc}}','{{$id}}','{{$rating}}','{{$deletable}}')">
    <form id="game_form_{{$id}}" method="POST" action="{{$action}}">
        @csrf
        @method($method)

        {{--FieldsToPost--}}
        <div hidden>
            <input name="game_name" value="{{$name}}">
            <input name="game_img" value="{{$image}}">
            <input name="game_id" value="{{$id}}">
            <input name="game_type" id="game_type_{{$id}}">
            <input name="game_rating" id="game_rating_{{$id}}">
        </div>


        <div class="card">
            <img src="{{$image}}" class="card-img-top" alt="..."/>
            <div class="card-body">
                <h5 class="card-title">{{$name}}</h5>
                <p class="card-text fw-bold">
                    {{$desc}}
                </p>
            </div>
        </div>
    </form>
</div>

@if($deletable)
    <form hidden id="delete_form_{{$id}}" method="POST" action="library/{{$id}}">
        @csrf
        @method("DELETE")
    </form>
@endif
