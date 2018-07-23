<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class AlignmentController extends Controller
{
    public function alignQuest(Request $request)
    {
        $character = $request->session()->get('character');
        return view('characters.Form.alignQuest', compact('character', $character));
    }

    public function postalignQuest(Request $request)
    {
        $this->validate($request, [
            'alignment' => 'required'
        ]);
        $character = $request->session()->get('character');
        if(empty($request->session()->get('character'))){
            $character = new Character();
            $character->alignment = $request->input('alignment');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }else{
            $character = $request->session()->get('character');
            $character->alignment = $request->input('alignment');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }
        return redirect('/reviewQuest')->with('success', 'Alignment Saved!');

    }
}
