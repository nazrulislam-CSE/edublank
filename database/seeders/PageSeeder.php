<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'page_name_en'           => 'Home',
                'page_name_bn'           => 'হোম',
                'page_title_en'          => 'Home page',
                'page_title_bn'          => 'হোম পেজ',
                'page_slug'              => 'home-page',
                'page_description_en'    => 'This is Home Page',
                'page_description_bn'    => 'এটি হোম পেজ',
                'meta_title'             => 'contact-us',
                'keywords'               => 'home,home,home',
                'meta_description'       => 'this is home page',
                'status'                 => 1,
                'is_default'             => 1,
                'created_by'             => 1,
                'position'               => 3,
                'created_at'             => new \DateTime ?: new \DateTime
            ],
            [
                'page_name_en'           => 'About Us',
                'page_name_bn'           => 'আমাদের সম্পর্কে',
                'page_title_en'          => 'About Us',
                'page_title_bn'          => 'আমাদের সম্পর্কে',
                'page_slug'              => 'about-us',
                'page_description_en'    => 'This is About Us Page',
                'page_description_bn'    => 'এটি আমাদের সম্পর্কে পৃষ্ঠা',
                'meta_title'             => 'about-us',
                'keywords'               => 'about,about,about',
                'meta_description'       => 'this is about us page',
                'status'                 => 1,
                'is_default'             => 1,
                'created_by'             => 1,
                'position'               => 3,
                'created_at'             => new \DateTime ?: new \DateTime
            ],
            [
                'page_name_en'           => 'Contact Us',
                'page_name_bn'           => 'যোগাযোগ করুন',
                'page_title_en'          => 'Contact Us',
                'page_title_bn'          => 'যোগাযোগ করুন',
                'page_slug'              => 'contact-us',
                'page_description_en'    => 'This is Contact Us Page',
                'page_description_bn'    => 'এটি আমাদের সাথে যোগাযোগের পৃষ্ঠা',
                'meta_title'             => 'contact-us',
                'keywords'               => 'contact,contact,contact',
                'meta_description'       => 'this is contact us page',
                'status'                 => 1,
                'is_default'             => 1,
                'created_by'             => 1,
                'position'               => 3,
                'created_at'             => new \DateTime ?: new \DateTime
            ],
            [
                'page_name_en'           => 'Privecy Policy',
                'page_name_bn'           => 'গোপনীয়তা নীতি',
                'page_title_en'          => 'Privecy Policy',
                'page_title_bn'          => 'গোপনীয়তা নীতি',
                'page_slug'              => 'privecy-policy',
                'page_description_en'    => 'This is Privecy Policy Us Page',
                'page_description_bn'    => 'এটি গোপনীয়তা নীতি আমাদের পৃষ্ঠা',
                'meta_title'             => 'privecy-policy',
                'keywords'               => 'privecy,privecy,privecy',
                'meta_description'       => 'this is privecy page',
                'status'                 => 1,
                'is_default'             => 1,
                'created_by'             => 1,
                'position'               => 3,
                'created_at'             => new \DateTime ?: new \DateTime
            ],
            [
                'page_name_en'           => 'Terms & Conditions',
                'page_name_bn'           => 'শর্তাবলী',
                'page_title_en'          => 'Terms & Conditions',
                'page_title_bn'          => 'শর্তাবলী',
                'page_slug'              => 'terms-&-conditions',
                'page_description_en'    => 'This is Terms & Conditions Page',
                'page_description_bn'    => 'এটি শর্তাবলী পৃষ্ঠা',
                'meta_title'             => 'terms-&-conditions',
                'keywords'               => 'terms-&-conditions,terms-&-conditions,terms-&-conditions',
                'meta_description'       => 'this is terms-&-conditions page',
                'status'                 => 1,
                'is_default'             => 1,
                'created_by'             => 1,
                'position'               => 3,
                'created_at'             => new \DateTime ?: new \DateTime
            ],
            
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
