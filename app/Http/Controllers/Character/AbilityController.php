<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class AbilityController extends Controller
{
    public function abilityQuest(Request $request)
    {
        $character = $request->session()->get('character');
        return view('characters.Form.abilityQuest', compact('character', $character));
    }

    public function postabilityQuest(Request $request)
    {
        $character = $request->session()->get('character');
        if(empty($request->session()->get('character'))){
            $character = new Character();
            $character->str_score = $request->input('str_score');
            $character->dex_score = $request->input('dex_score');
            $character->con_score = $request->input('con_score');
            $character->int_score = $request->input('int_score');
            $character->wis_score = $request->input('wis_score');
            $character->cha_score = $request->input('cha_score');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }else{
            $character = $request->session()->get('character');
            $character->str_score = $request->input('str_score');
            $character->dex_score = $request->input('dex_score');
            $character->con_score = $request->input('con_score');
            $character->int_score = $request->input('int_score');
            $character->wis_score = $request->input('wis_score');
            $character->cha_score = $request->input('cha_score');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }
        
    return redirect('/backgroundQuest')->with('success', 'Abilities Saved!');
    }
}
