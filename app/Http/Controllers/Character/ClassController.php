<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;


class ClassController extends Controller
{
    public function index(Request $request)
    {
        $classArray = [];
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
        array_push($classArray, $barbarian, $bard, $cleric, $druid, $fighter, $monk, $paladin, $ranger, $rogue, $sorcerer, $warlock, $wizard);
        $character = $request->session()->get('character');
        return view('characters.Form.classQuest', compact('classArray', 'character'));
    }

    public function postclassQuest(Request $request)
    {
        $this->validate($request, [
            'class' => 'required'
        ]);
        $character = $request->session()->get('character');
        $character->class = $request->input('class');
        switch ($character->class) {
            case 'Barbarian':
                $character->hit_dice = 12;
                $character->hit_points = $character->con_mod + 12;
                $character->proficiency_bonus = 2;
                break;
            case 'Fighter':
            case 'Paladin':
            case 'Ranger':
                $character->hit_dice = 10;
                $character->hit_points = $character->con_mod + 10;
                $character->proficiency_bonus = 2;
                break;
            case 'Bard':
            case 'Cleric':
            case 'Druid':
            case 'Monk':
            case 'Rogue':
            case 'Warlock':
                $character->hit_dice = 8;
                $character->hit_points = $character->con_mod + 8;
                $character->proficiency_bonus = 2;
            case 'Sorcerer':
            case 'Wizard':
                $character->hit_dice = 6;
                $character->hit_points = $character->con_mod + 6;
                $character->proficiency_bonus = 2;
                break;
        }
        $character->user_id = auth()->user()->id;
        $request->session()->put('character', $character);

        return redirect('/abilityQuest')->with('success', 'Class Saved!');
    }
}
