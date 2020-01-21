<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Field;
use App\Models\Wardrobe;
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

    protected $with = [
        'field', 'wardrobe'
    ];

    public function team() {
        return $this->belongsTo(Team::class);
    }

    public function field() {
        return $this->belongsTo(Field::class);
    }

    public function wardrobe() {
        return $this->belongsTo(Wardrobe::class);
    }

}

