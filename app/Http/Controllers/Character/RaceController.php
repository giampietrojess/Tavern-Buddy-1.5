<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class RaceController extends Controller
{
    private $raceArray;

    public function index(Request $request)
    {   
        $this->raceArray = [];
        $dwarf = json_decode(file_get_contents('http://dnd5eapi.co/api/races/1'));
        $elf = json_decode(file_get_contents('http://dnd5eapi.co/api/races/2'));
        $halfling = json_decode(file_get_contents('http://dnd5eapi.co/api/races/3'));
        $human = json_decode(file_get_contents('http://dnd5eapi.co/api/races/4'));
        $dragonborn = json_decode(file_get_contents('http://dnd5eapi.co/api/races/5'));
        $gnome = json_decode(file_get_contents('http://dnd5eapi.co/api/races/6'));
        $half_elf = json_decode(file_get_contents('http://dnd5eapi.co/api/races/7'));
        $half_orc = json_decode(file_get_contents('http://dnd5eapi.co/api/races/8'));
        $tiefling = json_decode(file_get_contents('http://dnd5eapi.co/api/races/9'));
        array_push($raceArray, $dwarf, $elf, $halfling, $human, $dragonborn, $gnome, $half_elf, $half_orc, $tiefling);
        $character = $request->session()->get('character');
        return view('characters.Form.raceQuest', compact('raceArray', 'character'));
    }

    public function postraceQuest(Request $request)
    {
        echo $this->raceArray;
        $this->validate($request, [
            'race' => 'required'
        ]);
        $character = $request->session()->get('character');
        $character->race = $request->input('race');
        foreach ($raceArray as $race) {
            $character->speed = $race->speed;
        }
        $character->user_id = auth()->user()->id;
        $request->session()->put('character', $character);

        
        return redirect('/classQuest')->with('success', 'Race Saved!');
    }
}
