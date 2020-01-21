<?php

namespace App\Models;

use App\Models\Membership;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'membership_id', 'team_id', 'type'
    ];

    public function membership() {
        return $this->belongsTo(Membership::class);
    }

    public function team() {
        return $this->belongsTo(Team::class);
    }

}
