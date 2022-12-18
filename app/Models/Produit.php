<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    private static $facteurTVA = 1.16;

    public function category () {

        return $this -> belongsTo(Category::class);

    }

    public function tags() {

        return $this -> belongsToMany(Tag::class);

    }

    public function recommandations() {

        return $this -> belongsToMany(Produit::class, 'produit_recommande', 'produit_id', 'produit_recommande_id');

    }

    public function prixTTC() {

        return number_format($this->prix_ht * self::$facteurTVA, 2);

    }
}
