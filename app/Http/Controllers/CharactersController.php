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

    public function nameQuest()
    {
        return view('characters.Form.nameQuest');
    }

    public function raceQuest()
    {
        return view('characters.Form.raceQuest');
    }

    public function classQuest()
    {
        return view('characters.Form.classQuest');
    }

    public function abilityQuest()
    {
        return view('characters.Form.abilityQuest');
    }


    public function backgroundQuest()
    {
        return view('characters.Form.backgroundQuest');
    }


    public function alignQuest()
    {
        return view('characters.Form.alignQuest');
    }


    public function reviewQuest()
    {
        return view('characters.Form.reviewQuest');
    }

   















    
    /**
     * Store a newly created character in the DB.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Validation
        $this->validate($request, [
            'character_name' => 'required',
            'race' => 'required',
            'class' => 'required',
            'background' => 'required',
            'alignment' => 'required',
        ]);
        
        // Create Character from Input
        $character = new Character;
        $character->character_name = $request->input('character_name');
        $character->race = $request->input('race');
        $character->class = $request->input('class');
        $character->str_score = $request->input('str_score');
        $character->dex_score = $request->input('dex_score');
        $character->con_score = $request->input('con_score');
        $character->int_score = $request->input('int_score');
        $character->wis_score = $request->input('wis_score');
        $character->cha_score = $request->input('cha_score');
        $character->background = $request->input('background');
        $character->alignment = $request->input('alignment');
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
        //
    }
}
