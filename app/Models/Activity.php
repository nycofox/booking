<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public static function log($action, $user = null, $details = null, $subject = null): Activity
    {
        $activity = new self();
        $activity->action = $action;
        $activity->details = $details;
        $activity->subject_id = $subject ? $subject->id : null;
        $activity->subject_type = $subject ? get_class($subject) : null;
        $activity->user_id = $user ? $user->id : null;

        $activity->save();

        return $activity;
    }

    /**
     * Get the user that owns the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->morphTo();
    }


}
