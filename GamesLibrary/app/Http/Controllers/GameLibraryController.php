<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameLibraryController extends Controller
{

    public function index()
    {
        //Get user saved games
        $data =[
            "categories" => [
                ["Wishlist",Game::whereBelongsTo(Auth::user())->where('type','wishlist')->get()],
                ["Completati", Game::whereBelongsTo(Auth::user())->where('type','played')->get()],
                ["Libreria",Game::whereBelongsTo(Auth::user())->where('type','not played')->get()],
                ["In corso", Game::whereBelongsTo(Auth::user())->where('type','playing')->get()],
            ]
        ];

        return view("library")->with($data);
    }

    public function update(Request $request, $id){

        //Get element to edit from db
        $edit_el = Game::find($id)->get();

        //Check if found
        if($edit_el == null)
            return "Il gioco desiderato non é stato trovato";

        //Element was found, edit its properties
        Game::find($id)->update([
            'type' => $request->input('game_type'),
            'rating' => $request->input('game_rating')
        ]);

        return redirect('library');
    }

    public function destroy($id){
        Game::find($id)->delete();
        return redirect('library');
    }
}
