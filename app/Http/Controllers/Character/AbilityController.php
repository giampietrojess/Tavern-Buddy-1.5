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
            if ($character->str_score === 1) {
                $character->str_mod = -5;
            } else if ($character->str_score === 2 || 3) {
                $character->str_mod = -4;
            }
            // if ('str_score' == 4 || 5) {
            //     $character->str_mod = -3;
            // }
            // if ('str_score' == 6 || 7) {
            //     $character->str_mod = -2;
            // }
            // if ('str_score' == 8 || 9) {
            //     $character->str_mod = -1;
            // }
            // if ('str_score' == 10 || 11) {
            //     $character->str_mod = 0;
            // }
            // if ('str_score' == 12 || 13) {
            //     $character->str_mod = 1;
            // }
            // if ('str_score' == 14 || 15) {
            //     $character->str_mod = 2;
            // }
            // if ('str_score' == 16 || 17) {
            //     $character->str_mod = 3;
            // }
            // if ('str_score' == 18 || 19) {
            //     $character->str_mod = 4;
            // }
        $character->dex_score = $request->input('dex_score');
            if ($character->dex_score === 1) {
                $character->dex_mod = -5;
            }
            else if ($character->dex_score === 2 || 3) {
                $character->dex_mod = -4;
            }
            // if ('dex_score' == 4 || 5) {
            //     $character->dex_mod = -3;
            // }
            // if ('dex_score' == 6 || 7) {
            //     $character->dex_mod = -2;
            // }
            // if ('dex_score' == 8 || 9) {
            //     $character->dex_mod = -1;
            // }
            // if ('dex_score' == 10 || 11) {
            //     $character->dex_mod = 0;
            // }
            // if ('dex_score' == 12 || 13) {
            //     $character->dex_mod = 1;
            // }
            // if ('dex_score' == 14 || 15) {
            //     $character->dex_mod = 2;
            // }
            // if ('dex_score' == 16 || 17) {
            //     $character->dex_mod = 3;
            // }
            // if ('dex_score' == 18 || 19) {
            //     $character->dex_mod = 4;
            // }
        $character->con_score = $request->input('con_score');
            if ($character->con_score === 1) {
                $character->con_mod = -5;
            }
            else if ($character->con_score === 2 || 3) {
                $character->con_mod = -4;
            }
            // else if ('con_score' == 4 || 5) {
            //     $character->con_mod = -3;
            // }
            // if ('con_score' == 6 || 7) {
            //     $character->con_mod = -2;
            // }
            // if ('con_score' == 8 || 9) {
            //     $character->con_mod = -1;
            // }
            // if ('con_score' == 10 || 11) {
            //     $character->con_mod = 0;
            // }
            // if ('con_score' == 12 || 13) {
            //     $character->con_mod = 1;
            // }
            // if ('con_score' == 14 || 15) {
            //     $character->con_mod = 2;
            // }
            // if ('con_score' == 16 || 17) {
            //     $character->con_mod = 3;
            // }
            // if ('con_score' == 18 || 19) {
            //     $character->con_mod = 4;
            // }
        $character->int_score = $request->input('int_score');
            if ($character->int_score === 1) {
                $character->int_mod = -5;
            }
            else if ($character->int_score === 2 || 3) {
                $character->int_mod = -4;
            }
            // if ('int_score' == 4 || 5) {
            //     $character->int_mod = -3;
            // }
            // if ('int_score' == 6 || 7) {
            //     $character->int_mod = -2;
            // }
            // if ('int_score' == 8 || 9) {
            //     $character->int_mod = -1;
            // }
            // if ('int_score' == 10 || 11) {
            //     $character->int_mod = 0;
            // }
            // if ('int_score' == 12 || 13) {
            //     $character->int_mod = 1;
            // }
            // if ('int_score' == 14 || 15) {
            //     $character->int_mod = 2;
            // }
            // if ('int_score' == 16 || 17) {
            //     $character->int_mod = 3;
            // }
            // if ('int_score' == 18 || 19) {
            //     $character->int_mod = 4;
            // }
        $character->wis_score = $request->input('wis_score');
            if ($character->wis_score === 1) {
                $character->wis_mod = -5;
            }
            else if ($character->wis_score === 2 || 3) {
                $character->wis_mod = -4;
            }
            // if ('wis_score' == 4 || 5) {
            //     $character->wis_mod = -3;
            // }
            // if ('wis_score' == 6 || 7) {
            //     $character->wis_mod = -2;
            // }
            // if ('wis_score' == 8 || 9) {
            //     $character->wis_mod = -1;
            // }
            // if ('wis_score' == 10 || 11) {
            //     $character->wis_mod = 0;
            // }
            // if ('wis_score' == 12 || 13) {
            //     $character->wis_mod = 1;
            // }
            // if ('wis_score' == 14 || 15) {
            //     $character->wis_mod = 2;
            // }
            // if ('wis_score' == 16 || 17) {
            //     $character->wis_mod = 3;
            // }
            // if ('wis_score' == 18 || 19) {
            //     $character->wis_mod = 4;
            // }
        $character->cha_score = $request->input('cha_score');
            if ($character->cha_score === 1) {
                $character->cha_mod = -5;
            }
            else if ($character->cha_score === 2 || 3) {
                $character->cha_mod = -4;
            }
            // if ('cha_score' == 4 || 5) {
            //     $character->cha_mod = -3;
            // }
            // if ('cha_score' == 6 || 7) {
            //     $character->cha_mod = -2;
            // }
            // if ('cha_score' == 8 || 9) {
            //     $character->cha_mod = -1;
            // }
            // if ('cha_score' == 10 || 11) {
            //     $character->cha_mod = 0;
            // }
            // if ('cha_score' == 12 || 13) {
            //     $character->cha_mod = 1;
            // }
            // if ('cha_score' == 14 || 15) {
            //     $character->cha_mod = 2;
            // }
            // if ('cha_score' == 16 || 17) {
            //     $character->cha_mod = 3;
            // }
            // if ('cha_score' == 18 || 19) {
            //     $character->cha_mod = 4;
            // }
        $character->user_id = auth()->user()->id;
        $request->session()->put('character', $character);

        
    return redirect('/backgroundQuest')->with('success', 'Abilities Saved!');
    }
}
