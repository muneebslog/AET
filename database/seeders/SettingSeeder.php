<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Seed the application's settings (hero and other defaults).
     */
    public function run(): void
    {
        $hero = [
            'hero_title' => 'One Ummah,',
            'hero_highlight_text' => 'One Mission of Mercy',
            'hero_subtitle' => 'At Ummahly, we unite hearts to bring hope, dignity, and relief to those in need. In 2025 alone, we delivered emergency food aid and medical supplies to 12,482 families across 14 conflict regions.',
            'hero_primary_cta_text' => 'Donate Now',
            'hero_secondary_cta_text' => 'Learn More',
            'hero_background_image' => 'hero-default.jpg',
        ];

        foreach ($hero as $key => $value) {
            Setting::set($key, $value, 'hero');
        }
    }
}
