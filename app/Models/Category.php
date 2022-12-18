<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function parent() {

        return $this -> belongsTo(Category::class, 'parent_id');

    }

    public function children() {
        
        return $this -> hasMany(Category::class, 'parent_id');

    }

    public function produitsParent() {

        return $this -> hasMany(Produit::class);

    }

    public function produitsChild() {

        return $this -> hasManyThrough(Produit::class, Category::class, 'parent_id', 'category_id');

    }

    public function produits() {

        $produits = $this -> produitsParent() -> with('category') -> get() -> merge($this -> produitsChild() -> with('category') -> get());

        return $produits;

    }
}
