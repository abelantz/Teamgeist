<?php

namespace App\Models;

use App\Models\Membership;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'amount', 'paid'
    ];

    public function membership() {
        return $this->belongsTo(Membership::class);
    }

}
