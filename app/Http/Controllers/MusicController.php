<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        return view('music-gallery', compact('musics'));
    }

    public function store(Request $request)
    {
        Music::create($request->all());

        return redirect()->route('music-gallery')->with('success', 'Music successfully created!');
    }

    public function edit($id)
    {
        $music = Music::findOrFail($id);
        return view('edit', compact('music'));
    }

    public function update(Request $request, $id)
    {
        $music = Music::findOrFail($id);
        $music->update($request->all());

        return redirect()->route('music-gallery')->with('success', 'Music successfully updated!');
    }

    public function destroy($id)
    {
        $music = Music::findOrFail($id);
        $music->delete();

        return redirect()->route('music-gallery')->with('success', 'Music successfully deleted!');
    }

    
}
