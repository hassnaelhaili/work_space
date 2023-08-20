<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Space;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        foreach ($categories as $category) {

            //Space::factory(4)->create(["category_id" => $category->id]);

            Space::factory(4)->for($category)->create();
        }
    }
}
