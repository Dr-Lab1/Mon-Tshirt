<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new Tag();
        $tag -> nom = "#nike";
        $tag -> save();

        $tag2 = new Tag();
        $tag2 -> nom = "#music";
        $tag2 -> save();

        $tag3 = new Tag();
        $tag3 -> nom = "#studio";
        $tag3 -> save();
    }
}
