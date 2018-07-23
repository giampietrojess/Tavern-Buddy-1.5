<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class RaceController extends Controller
{
    public function index(Request $request)
    {   
        $raceName = json_decode(file_get_contents('http://dnd5eapi.co/api/classes'));
        $character = $request->session()->get('character');
        return view('characters.Form.raceQuest', compact('raceName', $raceName), compact('character', $character));
    }

    public function postraceQuest(Request $request)
    {
        $this->validate($request, [
            'race' => 'required'
        ]);
        $character = $request->session()->get('character');
        if(empty($request->session()->get('character'))){
            $character = new Character();
            $character->race = $request->input('race');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }else{
            $character = $request->session()->get('character');
            $character->race = $request->input('race');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }
        
        return redirect('/classQuest')->with('success', 'Race Saved!');
    }
}
