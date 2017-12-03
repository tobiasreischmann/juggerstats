<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Support\Facades\Input;

class GameController extends Controller
{
    function getIndex() {
        $games = Game::all();

        return view('game')->with('games', $games);
    }

    function add() {

        $game = new Game;
        return view('addgame')->with('game', $game);
    }

    function store() {
        $game = new Game(Input::all());
        $game->save();
        return redirect('game');
    }
}

