<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;


class ClassController extends Controller
{
    public function index(Request $request)
    {
        $barbarian = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/1'));
        $bard = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/2'));
        $cleric = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/3'));
        $druid = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/4'));
        $fighter = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/5'));
        $monk = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/6'));
        $paladin = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/7'));
        $ranger = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/8'));
        $rogue = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/9'));
        $sorcerer = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/10'));
        $warlock = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/11'));
        $wizard = json_decode(file_get_contents('http://dnd5eapi.co/api/classes/12'));
        $character = $request->session()->get('character');
        return view('characters.Form.classQuest', compact('barbarian', 'bard', 'cleric', 'druid', 'fighter', 'monk', 'paladin', 'ranger', 'rogue', 'sorcerer', 'warlock', 'wizard', 'character'));
    }

    public function postclassQuest(Request $request)
    {
        $this->validate($request, [
            'class' => 'required'
        ]);
        $character = $request->session()->get('character');
        $character->class = $request->input('class');
        $character->user_id = auth()->user()->id;
        $request->session()->put('character', $character);

        return redirect('/abilityQuest')->with('success', 'Class Saved!');
    }
}
