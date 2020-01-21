<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchdayAttendance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'member_id', 'matchday_id'
    ];
}
