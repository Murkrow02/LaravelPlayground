<?php

namespace App\Http\Controllers;

use App\Models\Game;use Illuminate\Support\Facades\Auth;

class GameLibraryController extends Controller
{

    public function index()
    {
        //Get user saved games
        $data =[
            "user_games" => Game::whereBelongsTo(Auth::user())->get()
        ];

        return view("library")->with($data);
    }


}
