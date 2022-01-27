<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';
    
    protected $fillable =
    [
        'place',
        'opponent',
        'day',
        
    ];
    
    public function games()
    {
        return $this->hasMany('App\Game');
    }
}
