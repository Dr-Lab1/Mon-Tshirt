<?php

namespace App\Http\Controllers\api;

use App\Models\Tag;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiMainController extends Controller
{
    //

    public function index() {
        $produits = Produit::with('category') -> get();

        $filtre = ['is_online' => 1, 'parent_id' => null];
        $categories = Category::where($filtre)->get();

        return ['produits' => $produits, 'categories' => $categories];
    }
    
    public function produit (Request $request) {

        $produit = Produit::findOrFail($request -> id);

        // dd($produit->recommandations()->get());

        $filtre = ['is_online' => 1, 'parent_id' => null];
        $categories = Category::where($filtre)->get();

        return ['produit' => $produit, 'categories' => $categories];

    }

    public function categorie (Request $request){

        // $produits = Produit::where('category_id', $request->id)->get();
        $category = Category::findOrFail($request -> id);
        $produits = $category -> produits();

        $filtre = ['is_online' => 1, 'parent_id' => null];
        $categories = Category::where($filtre)->get();

        return ['produits' => $produits, 'category' => $category, 'categories' => $categories];
    
    }

    public function tag(Request $request) {

        $tag = Tag::find($request -> id);
        
        $produits = $tag -> produits;

        $filtre = ['is_online' => 1, 'parent_id' => null];
        $categories = Category::where($filtre)->get();

        return ['produits' => $produits, 'tag' => $tag, 'categories' => $categories];
    }
}
