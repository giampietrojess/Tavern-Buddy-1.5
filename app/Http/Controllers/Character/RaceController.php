<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class RaceController extends Controller
{
    private $raceArray;
    const $dwarf = json_decode(file_get_contents('http://dnd5eapi.co/api/races/1'));
    const $elf = json_decode(file_get_contents('http://dnd5eapi.co/api/races/2'));
    var $halfling = json_decode(file_get_contents('http://dnd5eapi.co/api/races/3'));
    var $human = json_decode(file_get_contents('http://dnd5eapi.co/api/races/4'));
    var $dragonborn = json_decode(file_get_contents('http://dnd5eapi.co/api/races/5'));
    var $gnome = json_decode(file_get_contents('http://dnd5eapi.co/api/races/6'));
    var $half_elf = json_decode(file_get_contents('http://dnd5eapi.co/api/races/7'));
    var $half_orc = json_decode(file_get_contents('http://dnd5eapi.co/api/races/8'));
    var $tiefling = json_decode(file_get_contents('http://dnd5eapi.co/api/races/9'));
    
    public function createRaceArray()
    {
        $this->raceArray = array();
        array_push($raceArray, $dwarf, $elf, $halfling, $human, $dragonborn, $gnome, $half_elf, $half_orc, $tiefling);
        return $this->raceArray;
    }
    public function index(Request $request)
    {   
        $races = $this->raceArray;
        $character = $request->session()->get('character');
        return view('characters.Form.raceQuest', compact('races', 'character'));
    }

    public function postraceQuest(Request $request)
    {
        $races = $this->raceArray;
        $this->validate($request, [
            'race' => 'required'
        ]);
        $character = $request->session()->get('character');
        $character->race = $request->input('race');
        foreach ($races as $race) {
            $character->speed = $race->speed;
        }
        $character->user_id = auth()->user()->id;
        $request->session()->put('character', $character);

        
        return redirect('/classQuest')->with('success', 'Race Saved!');
    }
}
