<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Developer;

class DeveloperController extends BaseController
{
    // Tampilkan semua developer
    public function index()
    {
        $developers = Developer::all();
        return view('developers', ['developers' => $developers]);
    }

    // Simpan developer baru
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        Developer::create($request->all());
        return redirect('/developers');
    }

    // Tampilkan detail developer (API)
    public function show($id)
    {
        $developer = Developer::find($id);
        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }
        return response()->json($developer);
    }

    // Update developer (API)
    public function update(Request $request, $id)
    {
        $developer = Developer::find($id);
        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }
        $developer->update($request->all());
        return response()->json($developer);
    }

    // Hapus developer
    public function destroy($id)
    {
        $developer = Developer::find($id);
        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }
        $developer->delete();
        return redirect('/developers');
    }
}