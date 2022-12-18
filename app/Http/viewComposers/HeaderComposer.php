<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;
// use App\Http\ViewComposers;

class HeaderComposer
{
    public function compose(View $view){

        $filtre = ['is_online' => 1, 'parent_id' => null];
        $view->with('categories',Category::where($filtre)->get());

    }
}