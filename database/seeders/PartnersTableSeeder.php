<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $partners = [
            ['image_path' => 'partners/1ENJUHAtZLSJsbIZogsEVqwkwm2Qny5qgTB9x4u1.jpg', 'category' => 'governmental'],
            ['image_path' => 'partners/1nHKfliUpYMookSvjFRCT7WmrxkoF1pY6Oz0y518.jpg', 'category' => 'governmental'],
            ['image_path' => 'partners/2HLdwgj41gUb4UPONL1W1AsX4PaS86f7l9aJxaMk.jpg', 'category' => 'governmental'],
            ['image_path' => 'partners/3u5oWiAdD5dxvUsSAQRRcBTm7wi1jSKmeVzzfMuq.jpg', 'category' => 'governmental'],
            ['image_path' => 'partners/5VAFiYrIWF4vpyUF1bM90SGC2YbHGoG1Q54nBcaQ.png', 'category' => 'ngo'],
            ['image_path' => 'partners/7Yi8bQ9ShzlcrX5saYJO0wGDchy4af0DxgUuoVXA.png', 'category' => 'ngo'],
            ['image_path' => 'partners/8JVBG4NFzZxHn1eonRHfQSp6ZrPP9jWAVnHt09Gs.jpg', 'category' => 'ngo'],
            ['image_path' => 'partners/cNHCHgYfnZBodppu8HPIoTTAWPb6i14zzUjrPRxb.png', 'category' => 'ngo'],
            ['image_path' => 'partners/F4SWsy5Gtw4P8QreAWyYmF8dFrUXSLC2eRM30jN5.png', 'category' => 'international'],
            ['image_path' => 'partners/fcyUgNYTDlxxEVbeVz1zvnXuuHjA3awEgEeo0Xi9.png', 'category' => 'international'],
            ['image_path' => 'partners/FlrhG3mGKAv5S8p1BrguXccaflrzBa34hxd0NCIc.jpg', 'category' => 'international'],
            ['image_path' => 'partners/g7Jk6P8aPJbMoZuPwknqIObAsCRER0y80V758rKm.png', 'category' => 'international'],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
