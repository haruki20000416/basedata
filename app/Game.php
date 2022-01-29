<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    
     public $timestamps = false;
    
    protected $fillable =
    [
        'picher_id',
        'batter',
        'inning',
        'outcount',
        'count',
        'ballspecies',
        'speed',
        'result',
        'information_id'
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
