<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';
    
    public $timestamps = false;
    
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
