<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class BackgroundController extends Controller
{
    public function backgroundQuest(Request $request)
    {
        $character = $request->session()->get('character');
        return view('characters.Form.backgroundQuest', compact('character', $character));
    }

    public function postbackgroundQuest(Request $request)
    {
        $this->validate($request, [
            'background' => 'required'
        ]);
        $character = $request->session()->get('character');
        if(empty($request->session()->get('character'))){
            $character = new Character();
            $character->background = $request->input('background');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }else{
            $character = $request->session()->get('character');
            $character->background = $request->input('background');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }
        return redirect('/alignQuest')->with('success', 'Alignment Saved!');
    }
}
