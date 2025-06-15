<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'facebook'     => 'nullable|url',
            'linkedin'     => 'nullable|url',
            'youtube'      => 'nullable|url',
            'whatsapp'     => 'nullable|string',
            'email'        => 'nullable|email',
            'logo'         => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'cover_image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',

            // Validate dynamic images
            'about_image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'news_image'          => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'work_image'          => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'work_with_us_image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'gallery_image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'partners_image'      => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'contact_image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',

            // Validate statistics (optional)
            'projects_value'      => 'nullable|integer|min:0',
            'partners_value'      => 'nullable|integer|min:0',
            'beneficiaries_value' => 'nullable|integer|min:0',
            'governorates_value'  => 'nullable|integer|min:0',
        ]);

        $deleteOldImage = function ($key) {
            $old = Setting::where('key', $key)->first();
            if ($old && \File::exists(public_path($old->value))) {
                \File::delete(public_path($old->value));
            }
        };

        // Upload logo
        if ($request->hasFile('logo')) {
            $deleteOldImage('logo');
            $path = $request->file('logo')->store('settings', 'public');
            Setting::updateOrCreate(['key' => 'logo'], ['value' => 'storage/' . $path]);
        }

        // Upload cover image
        if ($request->hasFile('cover_image')) {
            $deleteOldImage('cover_image');
            $path = $request->file('cover_image')->store('settings', 'public');
            Setting::updateOrCreate(['key' => 'cover_image'], ['value' => 'storage/' . $path]);
        }

        // Dynamic sections with images and background toggle
        $sections = ['about', 'news', 'work', 'work_with_us', 'gallery', 'partners', 'contact'];
        foreach ($sections as $section) {
            $imageKey = "{$section}_image";
            $toggleKey = "{$section}_background_enabled";

            if ($request->hasFile($imageKey)) {
                $deleteOldImage($imageKey);
                $path = $request->file($imageKey)->store('settings', 'public');
                Setting::updateOrCreate(['key' => $imageKey], ['value' => 'storage/' . $path]);
            }

            Setting::updateOrCreate(
                ['key' => $toggleKey],
                ['value' => $request->has($toggleKey) ? '1' : '0']
            );
        }

        // Save social/contact fields
        foreach (['facebook', 'linkedin', 'youtube', 'whatsapp', 'email'] as $field) {
            Setting::updateOrCreate(['key' => $field], ['value' => $request->input($field)]);
        }

        // Save statistic values only (titles come from lang)
        foreach (['projects', 'partners', 'beneficiaries', 'governorates'] as $stat) {
            Setting::updateOrCreate(
                ['key' => $stat . '_value'],
                ['value' => $request->input($stat . '_value', 0)]
            );
        }

        return redirect()->back()->with('success', __('lang.success_setting_updated'));
    }

}
