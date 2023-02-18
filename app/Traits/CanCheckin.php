<?php

namespace App\Traits;

use App\Models\Checkin;

trait CanCheckin
{

    public function checkins()
    {
        return $this->hasMany(Checkin::class);
    }

    public function isCheckedin()
    {
        return $this->checkins()->whereNull('checkout_time')->exists();
    }

    public function checkin()
    {
        if ($this->isCheckedin()) {
            return;
        }

        $this->checkins()->create(['checkin_time' => now()]);
    }

    public function checkout()
    {
        if (!$this->isCheckedin()) {
            return;
        }

        $checkin = $this->checkins()->whereNull('checkout_time')->first();

        $checkin->update([
            'checkout_time' => now(),
            'duration' => $checkin->checkin_time->diffInMinutes(now()),
        ]);
    }

    public function getCheckedInAttribute()
    {
        return $this->isCheckedin();
    }

}
