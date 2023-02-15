<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GamesController extends Controller
{
    public function list()
    {
        return view('game-list', ['games' => Game::all()]);
    }

    public function view(int $gameId)
    {
        return view('game-detail', ['game' => Game::findOrFail($gameId)]);
    }

    public function delete(int $gameId)
    {
        return Game::destroy($gameId);
    }
}
