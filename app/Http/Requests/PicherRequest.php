<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PicherRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'picher.uniname' => 'required|string',
            'picher.pichername' => 'required|string',
            'picher.handedness' => 'required|string',
            'picher.quick' => 'required|integer',
            'picher.comment' => 'string',
            
        ];
    }
}
