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
        'type', 'time', 'half', 'member_id', 'second_member_id', 'matchday_id',
    ];

}
