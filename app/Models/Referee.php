<?php

namespace App\Models;

use App\Models\RefereesCategory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'membership_id', 'referees_category_id'
    ];

    public function category() {
        return $this->belongsTo(RefereesCategory::class, 'referees_category_id');
    }

    public function membership() {
        return $this->belongsTo(membership::class);
    }
}
