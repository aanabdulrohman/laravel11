<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);
        Category::create([
            'name' => 'Web Hosting',
            'slug' => 'web-hosting'
        ]);
        Category::create([
            'name' => 'WordPress',
            'slug' => 'wordpress'
        ]);
    }
}
