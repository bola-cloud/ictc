<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $settings = [
            ['key' => 'logo', 'value' => 'storage/settings/xguEu86IslNMBRYUYkuwWLIsVEpEFzAWavczJtA9.png'],
            ['key' => 'cover_image', 'value' => 'storage/settings/zHn2ifm2EexAFSx3izUFiU9eebqoFANMdUON8q5B.webp'],
            ['key' => 'facebook', 'value' => 'https://facebook.com/yourpage'],
            ['key' => 'linkedin', 'value' => 'https://linkedin.com/company/yourcompany'],
            ['key' => 'youtube', 'value' => 'https://youtube.com/channel/yourchannel'],
            ['key' => 'whatsapp', 'value' => '+201234567890'],
            ['key' => 'email', 'value' => 'info@example.com'],

            // Page-specific images
            ['key' => 'about_image', 'value' => 'storage/settings/about_default.jpg'],
            ['key' => 'news_image', 'value' => 'storage/settings/news_default.jpg'],
            ['key' => 'work_with_us_image', 'value' => 'storage/settings/work_default.jpg'],
            ['key' => 'gallery_image', 'value' => 'storage/settings/gallery_default.jpg'],
            ['key' => 'partners_image', 'value' => 'storage/settings/partners_default.jpg'],
            ['key' => 'contact_image', 'value' => 'storage/settings/contact_default.jpg'],
            ['key' => 'work_image', 'value' => 'storage/settings/contact_default.jpg'],

            // Background toggles
            ['key' => 'about_background_enabled', 'value' => '1'],
            ['key' => 'news_background_enabled', 'value' => '1'],
            ['key' => 'work_with_us_background_enabled', 'value' => '1'],
            ['key' => 'gallery_background_enabled', 'value' => '1'],
            ['key' => 'partners_background_enabled', 'value' => '1'],
            ['key' => 'contact_background_enabled', 'value' => '1'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }
}
