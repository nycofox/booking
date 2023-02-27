<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{
    public function index()
    {
        return view('backend.settings.index', [
            'settings' => Setting::all(),
        ]);
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }

        Cache::forget('settings');

        return redirect()->route('settings.index')->with('success', 'Settings updated successfully');
    }
}
