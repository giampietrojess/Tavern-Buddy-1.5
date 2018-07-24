<?php

namespace App\Http\Controllers\Character;

use Illuminate\Http\Request;
use App\Character;
use App\User;


class ClassController extends Controller
{
    public function classQuest(Request $request)
    {
        $character = $request->session()->get('character');

        return view('characters.Form.classQuest');
    }

    public function postclassQuest(Request $request)
    {
        $this->validate($request, [
            'class' => 'required'
        ]);
        $character = $request->session()->get('character');
        // if(empty($request->session()->get('character'))){
        //     $character = new Character();
        //     $character->class = $request->input('class');
        //     $character->user_id = auth()->user()->id;
        //     $request->session()->put('character', $character);
        // }else{
            // $character = $request->session()->get('character');
            $character->class = $request->input('class');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        // }
        return redirect('/abilityQuest')->with('success', 'Class Saved!');
    }
}
