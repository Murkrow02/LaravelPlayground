<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                'key' => 'aeb75cc9d0ef4788ab6e1733db510654',
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


}
