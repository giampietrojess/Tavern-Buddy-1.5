<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\User;

class CharactersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display all of a user's characters
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index')->with('characters', $characters);
    }

    /**
     * Show the form for creating a new character.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create');
    }

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



    public function raceQuest(Request $request)
    {
        $character = $request->session()->get('character');
        return view('characters.Form.raceQuest', compact('character', $character));
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
        if(empty($request->session()->get('character'))){
            $character = new Character();
            $character->class = $request->input('class');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }else{
            $character = $request->session()->get('character');
            $character->class = $request->input('class');
            $character->user_id = auth()->user()->id;
            $request->session()->put('character', $character);
        }
        return redirect('/abilityQuest')->with('success', 'Class Saved!');
    }
    
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



    public function reviewQuest(Request $request)
    {
        $character = $request->session()->get('character');
        return view('characters.Form.reviewQuest', compact('character', $character));
    }

   















    
    /**
     * Store a newly created character in the DB.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $character = $request->session()->get('character');
        $character->user_id = auth()->user()->id;
        $character->save();

        return redirect('/dashboard')->with('success', 'Character Created');
    }

    /**
     * Display the selected Character Sheet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::find($id);
        return view('characters.show')->with('character', $character);
    }

    public function mycharacters()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('characters.mycharacters')->with('characters', $user->characters);
    }

    /**
     * Show the form for editing the selected character.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $character = Character::find($id);
        // return view('characters.edit')->with('character', $character)
    }

    /**
     * Update the character data in the DB.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Form Validation
        // $this->validate($request, [
        //     'character_name' => 'required',
        //     'race' => 'required',
        //     'class' => 'required',
        //     'background' => 'required',
        //     'alignment' => 'required',
        // ]); 
        
        // Create Character from Input
        // $character = Character::find($id);
        // $character->character_name = $request->input('character_name');
        // $character->race = $request->input('race');
        // $character->class = $request->input('class');
        // $character->str_score = $request->input('str_score');
        // $character->dex_score = $request->input('dex_score');
        // $character->con_score = $request->input('con_score');
        // $character->int_score = $request->input('int_score');
        // $character->wis_score = $request->input('wis_score');
        // $character->cha_score = $request->input('cha_score');
        // $character->background = $request->input('background');
        // $character->alignment = $request->input('alignment');
        // $character->save();

        // return redirect('/characters')->with('success', 'Character Updated');
    }

    /**
     * Delete a character from the DB.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $character = Character::find($id);
        // Check for correct user
        if(auth()->user()->id !==$character->user_id){
            return redirect('/characters')->with('error', 'You can only remove your own Characters');
        }
        $character->delete();
        return redirect('/characters')->with('success', 'Character Removed');
    }
}
