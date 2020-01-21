<?php

namespace App\Models;

use App\Models\Team;
use App\Models\User;
use App\Models\MembersCategory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'members_categories_id', 'user_id'
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(MembersCategory::class, 'members_categories_id');
    }

}
