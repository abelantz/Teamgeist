<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id',
        'date',
        'start_time',
        'end_time',
        'field_id',
        'wardrobe_id'
    ];

}

