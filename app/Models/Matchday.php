<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Field;
use App\Models\Member;
use App\Models\Referee;
use App\Models\Wardrobe;
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

    public function team() {
        return $this->belongsTo(Team::class);
    }

    public function field() {
        return $this->belongsTo(Field::class);
    }

    public function wardrobe() {
        return $this->belongsTo(Wardrobe::class);
    }

    public function captain() {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function referee() {
        return $this->belongsTo(Referee::class);
    }

    public function attendance() {
        return $this->hasMany(MatchdayAttendance::class);
    }
}
