<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Developer;

class GameController extends BaseController
{
    // Tampilkan semua game beserta developer
    public function index()
    {
        $games = Game::with('developer')->get();
        $developers = Developer::all();
        return view('games', [
            'games' => $games,
            'developers' => $developers
        ]);
    }

    // Simpan game baru
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'genre' => 'required',
            'developer_id' => 'required|exists:developers,id',
        ]);

        Game::create($request->all());
        return redirect('/games');
    }

    // Tampilkan detail game
    public function show($id)
    {
        $game = Game::with('developer')->find($id);
        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }
        return response()->json($game);
    }

    // Update game
    public function update(Request $request, $id)
    {
        $game = Game::find($id);
        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }

        $game->update($request->all());
        return response()->json($game);
    }

    // Hapus game
    public function destroy($id)
    {
        $game = Game::find($id);
        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }

        $game->delete();
        return response()->json(['message' => 'Game deleted']);
    }
}
