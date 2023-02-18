<?php

namespace App\Models;

use App\Traits\CanCheckin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use CanCheckin;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
        'social_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'last_active_at' => 'datetime',
        'anonymized_at' => 'datetime',
    ];

    public function getFirstNameAttribute(): string
    {
        if ($this->isAnonymized) {
            return 'Slettet deltaker';
        }

        return explode(' ', $this->name)[0];
    }

    public function anonymize(): void
    {
        $this->update([
            'name' => null,
            'email' => null,
            'avatar_path' => null,
            'anonymized_at' => now(),
        ]);
    }

    public function getIsAnonymizedAttribute(): bool
    {
        return $this->anonymized_at != null;
    }

    /*
     * Relationships
     */

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
