@extends('layouts.app')


@section('content')
   
    <div class="container">
        <div class="row">
         
            <div class="col-md-9">    
                <!-- Dice Link -->
         
                <div class="linkCont">
                    <img src="/img/Dice-GoBack.png" alt="Go Back" class="imageLink">
                    <div class="middle">
                        <div class="text">
                            <a href="/mycharacters" class="burr">Back?</a>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-3">    
                <!-- If the user who is viewing the character is 
                the one who created the character, show 
                edit and delete buttons -->
                @if(!Auth::guest())
                    @if(Auth::user()->id == $character->user_id)
                        <!-- Pencil Link -->
                        <div class="linkCont">
                            <img src="/img/Pencil-Edit.png" alt="Edit" class="imageLink">
                            <div class="middle">
                                <div class="text">
                                    <a href="/characters/{{$character->id}}/edit" class="ham wiggle-me">Edit?</a>
                                </div>
                            </div>
                        </div>

                        <!-- Eraser Link -->
                        <div class="linkCont">
                            <img src="/img/Eraser-Delete.png" alt="Delete" class="imageLink">
                            <div class="middle">
                                <div class="text">
                                    
                                {!!Form::open(['action' => ['Character\CharactersController@destroy', $character->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete?', ['class' => 'ham'])}}
                                {!!Form::close()!!}
                                
                              
                                </div>
                            </div>
                        </div>



                        
                    @endif
                @endif   

            </div>
        </div>

        <div class="row">

            <div class="container">
                <div class="characterSheetHead">
                    <div class="nameBox">{{$character->character_name}}</div>
                    <div class="raceBox">{{$character->race}}</div>
                    <div class="classBox">{{$character->class}}</div>
                    <div class="levelBox">X</div>
                    <div class="bgBox">{{$character->background}}</div>
                    <div class="alignmentBox">{{$character->alignment}}</div>
                    <div class="xpBox">X</div>
                    <div class="userBox">{{$character->user->name}}</div>
                </div>

                <div class="attributesHere">
                    <div class="attBox">
                        Strength
                        <div class="col-md-12 text-center score">
                            {{$character->str_score}}
                        </div>
                        <div class="modifier">{{$character->str_mod}}</div>
                    </div>

                    <div class="attBox">
                        Dexterity
                        <div class="col-md-12 text-center score">
                            {{$character->dex_score}}
                        </div>
                        <div class="modifier">{{$character->dex_mod}}</div>
                    </div>

                    <div class="attBox">
                        Constitution
                        <div class="col-md-12 text-center score">
                            {{$character->con_score}}
                        </div>
                        <div class="modifier">{{$character->con_mod}}</div>
                    </div>

                    <div class="attBox">
                        Intelligence
                        <div class="col-md-12 text-center score">
                            {{$character->int_score}}
                        </div>
                        <div class="modifier">{{$character->int_mod}}</div>
                    </div>

                    <div class="attBox">
                        Wisdom
                        <div class="col-md-12 text-center score">
                            {{$character->wis_score}}
                        </div>
                        <div class="modifier">{{$character->wis_mod}}</div>
                    </div>

                    <div class="attBox">
                        Charisma
                        <div class="col-md-12 text-center score">
                            {{$character->cha_score}}
                        </div>
                        <div class="modifier">{{$character->cha_mod}}</div>
                    </div>
                
                </div>
                
                    <div class="profskiCon">   
                        <div class="proficiency">
                            <div class="row">
                                <div class="text-center proficiencyScore">
                                +{{$character->proficiency_bonus}}
                                </div>
                                <div class="profTitle">
                                    Proficiency Bonus
                                </div>
                            </div>
                        </div>


                        <div class="skills">
                            
                            <h5><u>Strength Skills</u></h5>
                            
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Saving Throws: ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Athletics:  ___</p>
                            <hr>
                            <h5><u>Dexterity Skills</u></h5>
                    
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Saving Throws: ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Acrobatics:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Sleight of Hand:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Stealth:  ___</p>
                            <hr>
                            <h5><u>Constitution Skills</u></h5>
                            
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Saving Throws: ___</p>
                            <hr>
                            <h5><u>Intelligence Skills</u></h5>
                        
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Saving Throws: ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Arcana:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> History:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Investigation:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Nature:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Religion:  ___</p>
                            <hr>
                            <h5><u>Wisdom Skills</u></h5>
                            
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Saving Throws: ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Animal Handling:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Insight:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Medicine:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Perception:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Survival:  ___</p>
                            <hr>
                            <h5><u>Charisma Skills</u></h5>
                        
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Saving Throws: ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Deception:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Intimidation:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Performance:  ___</p>
                            <p class="skilly"><i class="fa fa-circle-thin"></i> Persuasion:  ___</p>
                            <hr>
                        </div>
                    </div>  

                <div class="HPcontainer">

                    <div class="row">

                        <div class="initiative">
                            Initiative
                        </div>

                        <div class="armorClass">
                            Armor<br>Class
                        </div>

                        <div class="speedBox">
                            <p>speed</p>
                            <h5>{{$character->speed}} ft.</h5>
                        </div>

                    
                    </div>
                    <div class="row">
                        <div class="currentHP">
                                <p>Current Hit Points</p>
                                <h3>{{$character->hit_points}}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tempHP">
                            Temporary Hit Points
                        </div>
                    </div>
                    <div class="row">
                        <div class="hitDice">
                            <p>Hit Dice</p>
                            <h5>1 d{{$character->hit_dice}}</h5>
                        </div>
                        <div class="hitDice">
                            Death Saves
                        </div>
                        
                    </div>
                </div>

                    
                <div class="inventoryContainer">
            
                    <img class="iconR" src="/img/weaponicon.png" alt="weapon"><div class="head">Weapons</div>

                    <div class="innerWeapon">
                        <p>This is where data from the DnD 5e API will populate regarding the character's weapon proficiencies. For example:<p>
                            <ul>
                                <li>Light Armor</li>
                                <li>Medium Armor</li>
                                <li>Shields</li>
                                <li>Simple Weapons</li>
                            </ul>

                    </div>

        
                </div>

                <div class="extraBox">
                    <img class="iconL" src="/img/inventoryicon.png" alt="bag"><div class="head">Inventory</div>
                    <div class="innerInventory">
                            
                        <p>This is where data from the DnD 5e API will populate regarding the character's starting equipment. Users will also be able to update the character's inventory manually using the "Edit" function. For example:<p>
                                <ul>
                                    <li>One (1) Explorer's Pack</li>
                                    <li>Four (4) Javelins</li>
                                    <li>One (1) Battleaxe</li>
                                    <li>One (1) Handaxe</li>
                                </ul>

                    </div>
                </div>
                <div class="extraBox clearfix">
                    
                    <img class="iconR" src="/img/moneyIcon.png" alt="money"><div class="head">Money Pouch</div>
                    <div class="moneySection">
                        <div class="outerMoney">
                            <div class="moneyBox">
                                ?
                            </div>
                            Platinum
                        </div>
                        <div class="outerMoney">
                            <div class="moneyBox">
                                ?
                            </div>
                            Gold
                        </div>
                        <div class="outerMoney">
                            <div class="moneyBox">
                                ?
                            </div>
                            Silver
                        </div>
                        <div class="outerMoney">
                            <div class="moneyBox">
                                ?
                            </div>
                            Copper
                        </div>
                    </div>

                    <hr>
                    <img class="iconL" src="/img/MiscBg.png" alt="money"><div class="head">Other</div>
                    <div class="extraExtra">
                        This is an an area for additional information regarding the character. Stay tuned for more features in Version 2.0! 
                    </div>
                </div>

                
            </div>
              
            
        </div>

    </div>
    
@endsection