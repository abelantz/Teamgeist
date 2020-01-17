<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchdayEvent extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'time', 'half', 'player_id', 'second_player_id', 'matchday_id',
    ];

}
