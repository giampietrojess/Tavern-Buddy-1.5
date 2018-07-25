<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class RaceController extends Controller
{
    public function index(Request $request)
    {   
        $raceArray = [];
        $dwarf = json_decode(file_get_contents('http://dnd5eapi.co/api/races/1'));
        $elf = json_decode(file_get_contents('http://dnd5eapi.co/api/races/2'));
        $halfling = json_decode(file_get_contents('http://dnd5eapi.co/api/races/3'));
        $human = json_decode(file_get_contents('http://dnd5eapi.co/api/races/4'));
        $dragonborn = json_decode(file_get_contents('http://dnd5eapi.co/api/races/5'));
        $gnome = json_decode(file_get_contents('http://dnd5eapi.co/api/races/6'));
        $tiefling = json_decode(file_get_contents('http://dnd5eapi.co/api/races/9'));
        array_push($raceArray, $dragonborn, $dwarf, $elf, $gnome, $halfling, $human, $tiefling);
        $character = $request->session()->get('character');
        return view('characters.Form.raceQuest', compact('dwarf', 'elf', 'halfling', 'human', 'dragonborn', 'gnome', 'character'));
    }

    public function postraceQuest(Request $request)
    {
        $this->validate($request, [
            'race' => 'required'
        ]);
        $character = $request->session()->get('character');
        $character->race = $request->input('race');
        $character->user_id = auth()->user()->id;
        $request->session()->put('character', $character);

        
        return redirect('/classQuest')->with('success', 'Race Saved!');
    }
}
