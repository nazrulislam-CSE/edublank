<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            [
                'name'              => 'Home',
                'slug'              => 'home',
                'parent_id'         => null,
                'type'              => 1,
                'meta_title'        => 'home',
                'keywords'          => 'home,category,about',
                'meta_description'  => 'this is home category',
                'status'            => 1,
                'created_at'        => new \DateTime ?: new \DateTime
            ],
            [
                'name'              => 'About',
                'slug'              => 'about',
                'parent_id'         => null,
                'type'              => 1,
                'meta_title'        => 'about',
                'keywords'          => 'about,category,home',
                'meta_description'  => 'this is about category',
                'status'            => 1,
                'created_at'        => new \DateTime ?: new \DateTime
            ],
            [
                'name'              => 'News',
                'slug'              => 'news',
                'parent_id'         => null,
                'type'              => 1,
                'meta_title'        => 'news',
                'keywords'          => 'news,news,news',
                'meta_description'  => 'this is news category',
                'status'            => 1,
                'created_at'        => new \DateTime ?: new \DateTime
            ],
            [
                'name'              => 'Blog',
                'slug'              => 'blog',
                'parent_id'         => null,
                'type'              => 1,
                'meta_title'        => 'blog',
                'keywords'          => 'blog,blog,blog',
                'meta_description'  => 'this is blog category',
                'status'            => 1,
                'created_at'        => new \DateTime ?: new \DateTime
            ],
            [
                'name'              => 'Gallery',
                'slug'              => 'gallery',
                'parent_id'         => null,
                'type'              => 1,
                'meta_title'        => 'gallery',
                'keywords'          => 'gallery,gallery,gallery',
                'meta_description'  => 'this is gallery category',
                'status'            => 1,
                'created_at'        => new \DateTime ?: new \DateTime
            ],
            [
                'name'              => 'Contact Us',
                'slug'              => 'contact-us',
                'parent_id'         => null,
                'type'              => 1,
                'meta_title'        => 'contact-us',
                'keywords'          => 'contact,category,home',
                'meta_description'  => 'this is contact us category',
                'status'            => 1,
                'created_at'        => new \DateTime ?: new \DateTime
            ],
        ];
        
        foreach ($categories as $category) {
            Category::create($category);
        }
        

    }
}
