<?php

namespace App\Http\Controllers\Shop;

use App\Models\Tag;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index() {
        $produits = Produit::with('category') -> get();
        // $categories = Category::where('is_online', 1)->get();

        return view('shop.index', compact('produits'));
    }
    
    public function produit (Request $request) {

        $produit = Produit::find($request -> id);

        // dd($produit->recommandations()->get());

        return view('shop.produit', compact('produit'));

    }

    public function categorie (Request $request){

        // $produits = Produit::where('category_id', $request->id)->get();
        $category = Category::find($request -> id);
        $produits = $category -> produits();

        return view('shop.categorie', compact('produits', 'category'));
    }

    public function tag(Request $request) {

        $tag = Tag::find($request -> id);
        
        $produits = $tag -> produits;

        return view('shop.categorie', compact('produits', 'tag'));
    }
}
