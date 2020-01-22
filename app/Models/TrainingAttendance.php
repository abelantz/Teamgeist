<?php

namespace App\Models;

use App\Models\Training;
use Illuminate\Database\Eloquent\Model;

class TrainingAttendance extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id', 'training_id'
    ];

    public function training() {
        return $this->belongsTo(Training::class);
    }

}
