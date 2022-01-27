<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    
    protected $fillable =
    [
        'pichername',
        'batter',
        'inning',
        'outcount',
        'count',
        'ballspecies',
        'speed',
        'result',
    ];
    
    public function picher()
    {
        return $this->belongsTo('App\Picher');
        
    }
    
    
    public function information()
    {
        return $this->belongsTo('App\Information');
    }
}
