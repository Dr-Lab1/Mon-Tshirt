<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Category();
        $category1 -> nom = "Marvel";
        $category1 -> is_online = "1";
        $category1 -> parent_id = 1;
        $category1 -> save();

        $category2 = new Category();
        $category2 -> nom = "DC";
        $category2 -> is_online = "1";
        $category2 -> parent_id = 1;
        $category2 -> save();

        $category3 = new Category();
        $category3 -> nom = "NetFlix";
        $category3 -> is_online = "1";
        $category3 -> parent_id = 1;
        $category3 -> save();



    }
}
