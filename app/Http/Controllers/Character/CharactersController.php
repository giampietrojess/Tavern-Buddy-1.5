<?php

namespace App\Http\Controllers\Character;

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
        $request->session()->forget('character');

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
        $character = Character::find($id);
        return view('characters.edit')->with('character', $character);
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
        $this->validate($request, [
            'character_name' => 'required',
            'race' => 'required',
            'class' => 'required',
            'background' => 'required',
            'alignment' => 'required',
        ]); 
        
        // Create Character from Input
        $character = Character::find($id);
        $character->user_id = auth()->user()->id;
        $character->character_name = $request->input('character_name');
        $character->race = $request->input('race');
        $character->class = $request->input('class');
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
            }

        $character->background = $request->input('background');
        $character->alignment = $request->input('alignment');
        $character->save();

        return redirect('/mycharacters')->with('success', 'Character Updated');
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
            return redirect('/mycharacters')->with('error', 'You can only remove your own Characters');
        }
        $character->delete();
        return redirect('/mycharacters')->with('success', 'Character Removed');
    }
}
