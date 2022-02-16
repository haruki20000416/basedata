<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'information.day' => 'required',
            'information.place' => 'required|string',
            'information.opponent' => 'required|string',
            
        ];
    }
}
