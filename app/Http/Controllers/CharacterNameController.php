<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class CharacterNameController extends Controller
{
    public function nameQuest(Request $request)
    {
        $character = new \stdClass();
        $character->character_name = $request->session()->get('character');
        
        return view('characters.Form.nameQuest', compact('character', $character));
    }

    public function postnameQuest(Request $request)
    {
        $this->validate($request, [
            'character_name' => 'required',
        ]);

        if(empty($request->session()->get('character'))){
            $character = new Character();
            $character->character_name = $request->input('character_name');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }else{
            $character = $request->session()->get('character');
            $character->character_name = $request->input('character_name');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }
        


        return redirect('/raceQuest')->with('success', 'Name Saved!');
    }
}
