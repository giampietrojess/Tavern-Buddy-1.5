<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class AbilityController extends Controller
{
    public function index (Request $request)
    {
        $strength = json_decode(file_get_contents('http://dnd5eapi.co/api/ability-scores/1'));
        $dexterity = json_decode(file_get_contents('http://dnd5eapi.co/api/ability-scores/2'));
        $constitution = json_decode(file_get_contents('http://dnd5eapi.co/api/ability-scores/3'));
        $intelligence = json_decode(file_get_contents('http://dnd5eapi.co/api/ability-scores/4'));
        $wisdom = json_decode(file_get_contents('http://dnd5eapi.co/api/ability-scores/5'));
        $charisma = json_decode(file_get_contents('http://dnd5eapi.co/api/ability-scores/6'));
        $character = $request->session()->get('character');
        return view('characters.Form.abilityQuest', compact('strength', 'dexterity', 'constitution', 'intelligence', 'wisdom', 'charisma', 'character'));
    }

    public function postabilityQuest(Request $request)
    {
        $character = $request->session()->get('character');
        $character = $request->session()->get('character');
        $character->str_score = $request->input('str_score');
        $character->dex_score = $request->input('dex_score');
        $character->con_score = $request->input('con_score');
        $character->int_score = $request->input('int_score');
        $character->wis_score = $request->input('wis_score');
        $character->cha_score = $request->input('cha_score');
        $character->user_id = auth()->user()->id;
        $request->session()->put('character', $character);

        
    return redirect('/backgroundQuest')->with('success', 'Abilities Saved!');
    }
}
