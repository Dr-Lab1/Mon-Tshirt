<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new Produit();

        $produit -> nom = 'Captain America T-shirt';
        $produit -> prix_ht = 50;
        $produit -> description = 'T-shirt beau et souple...';
        $produit -> photo_principale = 'Captain_America.jpg';
        $produit -> category_id = 9;
        $produit -> save();

        $produit2 = new Produit();
        $produit2 -> nom = 'Marvel Amazon';
        $produit2 -> prix_ht = 35;
        $produit2 -> description = 'T-shirt beau et souple...';
        $produit2 -> photo_principale = 'Marvel_Amazon.jpg';
        $produit2 -> category_id = 9;
        $produit2 -> save();

        $produit3 = new Produit();
        $produit3 -> nom = 'Marvel Guest';
        $produit3 -> prix_ht = 33;
        $produit3 -> description = 'T-shirt beau et souple...';
        $produit3 -> photo_principale = 'Marvel_Guest.jpg';
        $produit3 -> category_id = 9;
        $produit3 -> save();

        $produit4 = new Produit();
        $produit4 -> nom = 'Marvel IronMan';
        $produit4 -> prix_ht = 45;
        $produit4 -> description = 'T-shirt beau et souple...';
        $produit4 -> photo_principale = 'Marvel_IronMan.jpg';
        $produit4 -> category_id = 9;
        $produit4 -> save();

        $produit5 = new Produit();
        $produit5 -> nom = 'Football Allemagne';
        $produit5 -> prix_ht = 145;
        $produit5 -> description = 'T-shirt beau et souple...';
        $produit5 -> photo_principale = 'Football_Allemagne.jpg';
        $produit5 -> category_id = 6;
        $produit5 -> save();

        $produit6 = new Produit();
        $produit6 -> nom = 'Football Manchester City';
        $produit6 -> prix_ht = 105;
        $produit6 -> description = 'T-shirt beau et souple...';
        $produit6 -> photo_principale = 'Football_Man_City.jpg';
        $produit6 -> category_id = 6;
        $produit6 -> save();

        $produit7 = new Produit();
        $produit7 -> nom = 'Football tottenham Club';
        $produit7 -> prix_ht = 125;
        $produit7 -> description = 'T-shirt beau et souple...';
        $produit7 -> photo_principale = 'Football_Tot.jpg';
        $produit7 -> category_id = 6;
        $produit7 -> save();

        $produit8 = new Produit();
        $produit8 -> nom = 'Football t-shirt';
        $produit8 -> prix_ht = 78;
        $produit8 -> description = 'T-shirt beau et souple...';
        $produit8 -> photo_principale = 'Football.jpg';
        $produit8 -> category_id = 6;
        $produit8 -> save();

        $produit9 = new Produit();
        $produit9 -> nom = 'Basketball maillot NBA Jayson TATUM 0';
        $produit9 -> prix_ht = 100;
        $produit9 -> description = 'T-shirt beau et souple...';
        $produit9 -> photo_principale = 'maillot-nba-jayson-tatum.jpg';
        $produit9 -> category_id = 7;
        $produit9 -> save();

        $produit10 = new Produit();
        $produit10 -> nom = 'Basketball maillot NBA Stephen CURRY 30';
        $produit10 -> prix_ht = 130;
        $produit10 -> description = 'T-shirt beau et souple...';
        $produit10 -> photo_principale = 'Sport_Basket_stephen-curry.jpg';
        $produit10 -> category_id = 7;
        $produit10 -> save();

        $produit11 = new Produit();
        $produit11 -> nom = 'Basketball maillot NBA Kyrie IRVING 11';
        $produit11 -> prix_ht = 170;
        $produit11 -> description = 'T-shirt beau et souple...';
        $produit11 -> photo_principale = 'Sport_Basket.jpeg';
        $produit11 -> category_id = 7;
        $produit11 -> save();

        $produit12 = new Produit();
        $produit12 -> nom = 'Basketball maillot NBA Anthony DAVIS 3';
        $produit12 -> prix_ht = 140;
        $produit12 -> description = 'T-shirt beau et souple...';
        $produit12 -> photo_principale = 'Sport_Basketball.png';
        $produit12 -> category_id = 7;
        $produit12 -> save();

        $produit13 = new Produit();
        $produit13 -> nom = 'Football maillot L1 Kylian MBAPPE 7';
        $produit13 -> prix_ht = 140;
        $produit13 -> description = 'T-shirt beau et souple...';
        $produit13 -> photo_principale = 'Sport_PSG.jpg';
        $produit13 -> category_id = 6;
        $produit13 -> save();

        $produit14 = new Produit();
        $produit14 -> nom = 'Starz t-shirt';
        $produit14 -> prix_ht = 40;
        $produit14 -> description = 'T-shirt beau et souple...';
        $produit14 -> photo_principale = 'Starz_Eminem-l500.jpg';
        $produit14 -> category_id = 10;
        $produit14 -> save();

        $produit15 = new Produit();
        $produit15 -> nom = 'Starz t-shirt insolite';
        $produit15 -> prix_ht = 40;
        $produit15 -> description = 'T-shirt beau et souple...';
        $produit15 -> photo_principale = 'Starz_Yeah.png';
        $produit15 -> category_id = 10;
        $produit15 -> save();
        
        $produit16 = new Produit();
        $produit16 -> nom = 'Starz t-shirt l400';
        $produit16 -> prix_ht = 40;
        $produit16 -> description = 'T-shirt beau et souple...';
        $produit16 -> photo_principale = 'Starz-l400.jpg';
        $produit16 -> category_id = 10;
        $produit16 -> save();

        $produit17 = new Produit();
        $produit17 -> nom = 'Starz t-shirt l4000';
        $produit17 -> prix_ht = 40;
        $produit17 -> description = 'T-shirt beau et souple...';
        $produit17 -> photo_principale = 'Starz-l4000.jpg';
        $produit17 -> category_id = 10;
        $produit17 -> save();

        $produit18 = new Produit();
        $produit18 -> nom = 'Netflix movie black';
        $produit18 -> prix_ht = 50;
        $produit18 -> description = 'T-shirt beau et souple...';
        $produit18 -> photo_principale = 'Netflix-Movie-Black-Tshirts.jpg';
        $produit18 -> category_id = 11;
        $produit18 -> save();

        $produit19 = new Produit();
        $produit19 -> nom = 'Netflix movie';
        $produit19 -> prix_ht = 50;
        $produit19 -> description = 'T-shirt beau et souple...';
        $produit19 -> photo_principale = 'Netflix+SS.png';
        $produit19 -> category_id = 11;
        $produit19 -> save();

        $produit20 = new Produit();
        $produit20 -> nom = 'Netflix';
        $produit20 -> prix_ht = 50;
        $produit20 -> description = 'T-shirt beau et souple...';
        $produit20 -> photo_principale = 't-shirt-insolite-netflix.jpg';
        $produit20 -> category_id = 11;
        $produit20 -> save();

        $produit18 = new Produit();
        $produit18 -> nom = 'Netflix tenis';
        $produit18 -> prix_ht = 60;
        $produit18 -> description = 'T-shirt beau et souple...';
        $produit18 -> photo_principale = 'Tenis_white.jpg';
        $produit18 -> category_id = 11;
        $produit18 -> save();

        $produit18 = new Produit();
        $produit18 -> nom = 'Netflix tenis th';
        $produit18 -> prix_ht = 65;
        $produit18 -> description = 'T-shirt beau et souple...';
        $produit18 -> photo_principale = 'tenis.jpg';
        $produit18 -> category_id = 11;
        $produit18 -> save();


        // $produit -> nom = 'Simpson T-shirt';
        // $produit -> prix_ht = 25;
        // $produit -> description = 'T-shirt Simpson, beau et souple... Voyez vous dans la peau de Homer Simpson';
        // $produit -> photo_principale = 'Simpson_Tshirt.jpg';
        // $produit -> category_id = 2;
        // $produit -> save();
        
        // $produit -> nom = 'Pink T-shirt';
        // $produit -> prix_ht = 75;
        // $produit -> description = 'T-shirt rose, beau et souple... Pas besoin de le repasser pour le mettre...';
        // $produit -> photo_principale = 'Pink_Tshirt.jpg';
        // $produit -> category_id = 2;
        // $produit -> save();
        
        // $produit -> nom = 'Metalic T-shirt';
        // $produit -> prix_ht = 500;
        // $produit -> description = 'T-shirt un peu grise, beau et souple... Dernier polo officiel du groupe <strong>Youth Group</strong>';
        // $produit -> photo_principale = 'Metalic_Tshirt.jpg';
        // $produit -> category_id = 3;
        // $produit -> save();
        
        // $produit -> nom = 'Grise T-shirt';
        // $produit -> prix_ht = 17;
        // $produit -> description = 'T-shirt grise, beau et souple... Elengi fort !';
        // $produit -> photo_principale = 'Grise_Tshirt.jpg';
        // $produit -> category_id = 3;
        // $produit -> save();
        
        // $produit -> nom = 'Green T-shirt';
        // $produit -> prix_ht = 25;
        // $produit -> description = 'T-shirt vert, beau et souple... Très sportif et facile à laver !';
        // $produit -> photo_principale = 'Green_Tshirt.jpg';
        // $produit -> category_id = 4;
        // $produit -> save();
        
        // $produit -> nom = 'Blue T-shirt';
        // $produit -> prix_ht = 5;
        // $produit -> description = 'T-shirt bleu, beau et souple...';
        // $produit -> photo_principale = 'Blue_Tshirt.jpg';
        // $produit -> category_id = 4;
        // $produit -> save();
        
        // $produit -> nom = 'Black T-shirt';
        // $produit -> prix_ht = 2;
        // $produit -> description = 'T-shirt noir, beau et souple...';
        // $produit -> photo_principale = 'Black_Tshirt.jpg';
        // $produit -> category_id = 5;
        // $produit -> save();
        
    }
}
