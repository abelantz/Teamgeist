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
        'date',
        'opponent',
        'start_time',
        'end_time',
        'meeting',
        'type',
        'field_id',
        'wardrobe_id'
    ];
}
