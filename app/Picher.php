<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picher extends Model
{
    protected $table = 'pichers';
    
     public $timestamps = false;
    
    protected $fillable =
    [
        'uniname',
        'pichername',
        'handedness',
        'quick',
        'comment',
        
        
    ];
    
    public function games()
    {
        return $this->hasMany('App\Game');
    }
}