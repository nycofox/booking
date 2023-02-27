<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{

    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            Cache::forget('settings');
        });

        static::deleting(function () {
            Cache::forget('settings');
        });
    }

    public static function getValue($key, $default = null)
    {
        return Cache::rememberForever('settings', function () {
            return self::pluck('value', 'key')->toArray();
        })[$key] ?? $default;
    }

}
