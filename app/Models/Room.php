<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    public function getSeatMapImageAttribute()
    {
        // TODO: Implement getSeatMapImageAttribute() method.
    }

    /*
     * Relationships
     */

    public function getNumberOfSeatsAttribute()
    {
        return $this->seats->count();
    }

    /*
     * Relationships
     */

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
