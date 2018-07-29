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
        $character->str_score = $request->input('str_score');
            switch ($character->str_score) {
                case 8:
                case 9:
                    $character->str_mod = -1;
                    break;
                case 10: 
                case 11:
                    $character->str_mod = 0;
                    break;
                case 12: 
                case 13:
                    $character->str_mod = 1;
                    break;
                case 14: 
                case 15:
                    $character->str_mod = 2;
                    break;
                case 16: 
                case 17:
                    $character->str_mod = 3;
                    break;
                case 18:
                case 19:
                    $character->str_mod = 4;
                    break;
                case 20:
                case 21:
                    $character->str_mod = 5;
                    break;
            }
        $character->dex_score = $request->input('dex_score');
            switch ($character->dex_score) {
                case 8:
                case 9:
                    $character->dex_mod = -1;
                    break;
                case 10: 
                case 11:
                    $character->dex_mod = 0;
                    break;
                case 12: 
                case 13:
                    $character->dex_mod = 1;
                    break;
                case 14: 
                case 15:
                    $character->dex_mod = 2;
                    break;
                case 16: 
                case 17:
                    $character->dex_mod = 0;
                    break;
                case 18:
                case 19:
                    $character->dex_mod = 4;
                    break;
                case 20:
                case 21:
                    $character->dex_mod = 5;
                    break;
            }
        $character->con_score = $request->input('con_score');
            switch ($character->con_score) {
                case 8:
                case 9:
                    $character->con_mod = -1;
                    break;
                case 10: 
                case 11: 
                    $character->con_mod = 0;
                    break;
                case 12: 
                case 13: 
                    $character->con_mod = 1;
                    break;
                case 14: 
                case 15: 
                    $character->con_mod = 2;
                    break;
                case 16: 
                case 17: 
                    $character->con_mod = 3;
                    break;
                case 18:
                case 19:
                    $character->con_mod = 4;
                    break;
                case 20:
                case 21:
                    $character->con_mod = 5;
                    break;
            }
        $character->int_score = $request->input('int_score');
            switch ($character->int_score) {
                case 8:
                case 9:
                    $character->int_mod = -1;
                    break;
                case 10: 
                case 11:
                    $character->int_mod = 0;
                    break;
                case 12: 
                case 13:
                    $character->int_mod = 1;
                    break;
                case 14: 
                case 15:
                    $character->int_mod = 2;
                    break;
                case 16: 
                case 17:
                    $character->int_mod = 3;
                    break;
                case 18:
                case 19:
                    $character->int_mod = 4;
                    break;
                case 20:
                case 21:
                    $character->int_mod = 5;
                    break;
            }
        $character->wis_score = $request->input('wis_score');
            switch ($character->wis_score) {
                case 8:
                case 9:
                    $character->wis_mod = -1;
                    break;
                case 10: 
                case 11:
                    $character->wis_mod = 0;
                    break;
                case 12: 
                case 13:
                    $character->wis_mod = 1;
                    break;
                case 14: 
                case 15:
                    $character->wis_mod = 2;
                    break;
                case 16: 
                case 17:
                    $character->wis_mod = 3;
                    break;
                case 18:
                case 19:
                    $character->wis_mod = 4;
                    break;
                case 20:
                case 21:
                    $character->wis_mod = 5;
                    break;
            }
        $character->cha_score = $request->input('cha_score');
            switch ($character->cha_score) {
                case 8:
                case 9:
                    $character->cha_mod = -1;
                    break;
                case 10: 
                case 11:
                    $character->cha_mod = 0;
                    break;
                case 12: 
                case 13:
                    $character->cha_mod = 1;
                    break;
                case 14: 
                case 15:
                    $character->cha_mod = 2;
                    break;
                case 16: 
                case 17:
                    $character->cha_mod = 3;
                    break;
                case 18:
                case 19:
                    $character->cha_mod = 4;
                    break;
                case 20:
                case 21:
                    $character->cha_mod = 5;
                    break;
            }
        $character->user_id = auth()->user()->id;
        $request->session()->put('character', $character);

        
    return redirect('/backgroundQuest')->with('success', 'Abilities Saved!');
    }
}
