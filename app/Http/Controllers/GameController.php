<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    function getIndex() {
        return view('game');
    }
}
