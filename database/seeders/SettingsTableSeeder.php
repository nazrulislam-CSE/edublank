<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name'  => 'site_name',
                'value' => 'Khobornews',
            ],
            [
                'name'  => 'site_logo',
                'value' => 'uploads/setting/logo/1702302389images (1).jpg',
            ],
            [
                'name'  => 'site_favicon',
                'value' => 'uploads/setting/favicon/1702302437images.jpg',
            ],
            [
                'name'  => 'site_footer_logo',
                'value' => 'uploads/setting/logo/1702302389template.png',
            ],
            [
                'name'  => 'site_contact_logo',
                'value' => 'uploads/setting/contact/17023023891701841454logo.png',
            ],
            [
                'name'  => 'site_company_logo',
                'value' => 'uploads/setting/company/17023023891701841454logo.png',
            ],
            [
                'name'  => 'phone',
                'value' => '01783465103',
            ],
            [
                'name'  => 'email',
                'value' => 'Khobornews@gmail.com',
            ],
            [
                'name'  => 'business_name',
                'value' => 'Khobornews',
            ],
            [
                'name'  => 'business_address',
                'value' => 'Pabna',
            ],
            [
                'name'  => 'business_hours',
                'value' => '10:00 - 6:00, Sa - Thu',
            ],
            [
                'name'  => 'copy_right',
                'value' => 'Copy Right Khobornews 2023',
            ],
            [
                'name'  => 'developed_by',
                'value' => 'ICON GROUP',
            ],
            [
                'name'  => 'developer_link',
                'value' => 'https://iconitsolutions.com/',
            ],
            [
                'name'  => 'about',
                'value' => 'Lorem ipsum dolor sit amet, consectet adipiscing Se velit ex, dictum at nunc placerat consequatS quam. ornaremi condiment PhasellusI cursii placerat quam et, mattis nibh Suspendislacinias.',
            ],
            [
                'name' => 'facebook_url',
                'value' => 'https://www.facebook.com/',
            ],
            [
                'name'  => 'messenger_url',
                'value' => 'https://www.messenger.com/',
            ],
            [
                'name'  => 'twitter_url',
                'value' => 'https://www.twitter.com/',
            ],
            [
                'name'  => 'linkedin_url',
                'value' => 'https://www.linkedin.com/',
            ],
            [
                'name' => 'youtube_url',
                'value' => 'https://www.youtube.com/',
            ],
            [
                'name'  => 'instagram_url',
                'value' => 'https://www.instagram.com/',
            ],
            [
                'name'  => 'pinterest_url',
                'value' => 'https://www.pinterest.com/',
            ],
            [
                'name'  => 'meta_title',
                'value' => 'Khobornews',
            ],
            [
                'name'  => 'meta_keyword',
                'value' => 'Khobornews',
            ],
            [
                'name'  => 'meta_description',
                'value' => 'Khobornews Most Popular News Portal.',
            ],
            // ... add entries for other types
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['name' => $setting['name']], $setting);
        }
    }
}
