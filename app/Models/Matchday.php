<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matchday extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id',
        'opponent',
        'date',
        'time',
        'type',
        'field_id',
        'wardrobe_id',
        'referee_id',
        'member_id'
    ];
}
