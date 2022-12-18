<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
// use Darryldecode\Cart\Cart;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function add(Request $request) {

        $produit = Produit::find($request->id);

        Cart::add(array(

            'id' => $produit->id,
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->quantity,
            'attributes' => array('size' => $request->size, 'photo' => $produit->photo_principale, 'prix_ttc' => $produit->prixTTC())
        ));

        return redirect(route('cart_index'));

    }

    public function index()
    {
        $content = Cart::getContent();

        $condition = new \Darryldecode\Cart\CartCondition(array(

            'name'  => 'VAT 16%',
            'type'  => 'tax',
            'target'=> 'subtotal',
            'value' => '16%'

        ));

        Cart::condition($condition);

        $total_ttc = Cart::getTotal();
        $total_ht = Cart::getSubTotal();

        $tva = $total_ttc - $total_ht;

        return view('cart.index', compact('content', 'total_ttc', 'total_ht', 'tva'));
    }
}
