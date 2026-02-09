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

        $trust = [
            'trust_section_title' => 'A Journey of Trust',
            'trust_section_subtitle' => 'Your contribution follows a rigorous path from intention to impact, ensuring every penny fulfills its purpose.',
            'trust_step_1_title' => 'You Donate',
            'trust_step_1_description' => 'Securely contribute your Sadaqah or Zakat through our encrypted fundraising platform.',
            'trust_step_2_title' => 'We Deploy Directly',
            'trust_step_2_description' => 'Our on-ground teams and verified partners mobilize resources to provide immediate aid.',
            'trust_step_3_title' => 'Transparent Updates',
            'trust_step_3_description' => 'Receive verified reports, photos, and financial breakdowns of how your gift changed lives.',
        ];

        foreach ($trust as $key => $value) {
            Setting::set($key, $value, 'trust');
        }

        $mission = [
            'mission_quote_title' => '"One Donation, Infinite Rewards"',
            'mission_description' => 'Our mission is rooted in the belief that every life has intrinsic value. By focusing on sustainable growth and transparent delivery, we ensure that your Sadaqah and Zakat create a lasting legacy of Barakah for generations to come.',
            'mission_button_text' => 'Read Our Story →',
        ];

        foreach ($mission as $key => $value) {
            Setting::set($key, $value, 'mission');
        }

        $transparency = [
            'transparency_title' => 'Where Your Donation Goes',
            'transparency_subtitle' => '2025 Financial Transparency Report',
            'transparency_programs_label' => 'Direct Programs & Field Relief',
            'transparency_programs_percent' => '88',
            'transparency_fundraising_label' => 'Advocacy & Fundraising',
            'transparency_fundraising_percent' => '7',
            'transparency_admin_label' => 'Operational Administration',
            'transparency_admin_percent' => '5',
            'transparency_audit_text' => 'Our operations are audited by independent third parties to ensure the highest standards of financial integrity and compliance with international non-profit regulations.',
        ];

        foreach ($transparency as $key => $value) {
            Setting::set($key, $value, 'transparency');
        }

        $global = [
            'global_title' => 'Global Reach, Local Impact.',
            'global_description' => 'We partner with verified on-ground organizations to ensure every dollar reaches the right hands. From the remote villages of Yemen to the bustling streets of Dhaka, our infrastructure is built for speed and accountability.',
            'global_image' => 'global-default.jpg',
        ];

        foreach ($global as $key => $value) {
            Setting::set($key, $value, 'global');
        }

        $footer = [
            'footer_registration_number' => 'Registered UK Charity #123456789.',
            'footer_description' => 'A global movement for human dignity.',
            'footer_newsletter_text' => 'Join 25,000+ donors receiving impact updates.',
            'footer_copyright' => '© 2026 Ummahly Foundation. All rights reserved. Secure SSL Encrypted.',
        ];

        foreach ($footer as $key => $value) {
            Setting::set($key, $value, 'footer');
        }
    }
}
