<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GamesController extends Controller
{
    public function list()
    {
        return view('game-list', ['games' => Game::all()]);
    }
}
