<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class GameSearchController extends Controller
{

    public function index(Request $request){

        //Get search string from query
        $search_string = $request->query->get("key","");
        $results = null;

        //Check if query string is present
        if(!empty($search_string)){

            //Download results from API
            $response = Http::get('https://api.rawg.io/api/games', [
                'key' => env('GAMES_API_KEY', ''),
                'search' => $search_string,
            ]);

            //Deserialize JSON
            $json = json_decode($response);
            $results = $json->results;
        }

        //Packet data in key/value
        $searchResult = [
            "games" => $results,
            "search_string" => $search_string
        ];

        return view("search", $searchResult);
    }

    public function store(Request $request){

        //Check if already saved this game
        $conflict = Game::where('original_id',$request->input('game_id'))->first();
        if($conflict != null){

            //Cannot save the same game twice
            return "Hai giá salvato questo gioco";
        }

        //Get logged user
        $logged_user = Auth::user();

        //Create new game entry with provided infos
        $new_game = new Game([
            'title' => $request->input('game_name'),
            'img' => $request->input('game_img'),
            'type' => $request->input('game_type'),
            'original_id' => $request->input('game_id'),
            'rating' => $request->input('game_rating'),
            'platform' => '',
        ]);

        //Save on DB
        $logged_user->games()->save($new_game);

        return redirect('library');
    }

}
