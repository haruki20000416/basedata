<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
   
    public function rules()
    {
        return [
            'game.batter' => 'required|string',
            'game.inning' => 'required|integer',
            'game.outcount' => 'required|integer',
            'game.count' => 'required|integer',
            'game.ballspecies' => 'required|string',
            'game.speed' => 'required|integer',
            'game.result' => 'required|string',
            'game.course' => 'required|integer',
            'game.picher_id' => 'required',
            'game.information_id' => 'required',
            
        ];
    }
}
