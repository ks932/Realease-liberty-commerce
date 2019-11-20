<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Beat Club Black',
           'description' => 'La technologie de Réduction active du bruit vous permet de rester à fond dans votre musique et de trouver l inspiration.',
           'photo' => 'https://www.beatsbydre.com/content/dam/beats/web/product/headphones/solo-pro/pdp/solo-pro-pdp-02.png.large.1x.png',
           'price' => 299.95
        ]);
 
        DB::table('products')->insert([
            'name' => 'Beat Club Blue',
            'description' => 'Grâce à son système acoustique d exception et à sa technologie de Réduction active du bruit, le casque Solo Pro vous permet de profiter d un son adapté à chaque situation.',
            'photo' => 'https://www.beatsbydre.com/content/dam/beats/web/product/headphones/solo-pro/global/ecom/product-tiles/sp-global-producttilev2-darkblue.png.large.1x.png',
            'price' => 299.95
        ]);
 
        DB::table('products')->insert([
            'name' => 'Beat Club Red',
            'description' => 'More Matte Collection',
            'photo' => 'https://www.beatsbydre.com/content/dam/beats/web/product/headphones/solo-pro/global/ecom/product-tiles/sp-global-producttilev2-red.png.large.1x.png',
            'price' => 299.95
        ]);
 
        DB::table('products')->insert([
            'name' => 'Beat Of The Sky',
            'description' => 'Besoin d un peu plus ? En cas de batterie faible, une charge Fast Fuel de 10 minutes vous offre 3 heures d écoute supplémentaires',
            'photo' => 'https://www.beatsbydre.com/content/dam/beats/web/product/headphones/solo-pro/global/ecom/product-tiles/sp-global-producttilev2-lightblue.png.large.1x.png',
            'price' => 299.95
        ]);
 
        DB::table('products')->insert([
            'name' => 'Beat Cream',
            'description' => 'La cream de la creaaaaame',
            'photo' => 'https://www.beatsbydre.com/content/dam/beats/web/product/headphones/solo-pro/global/ecom/product-tiles/sp-global-producttilev2-ivory.png.large.1x.png',
            'price' => 299.95
        ]);
 
        DB::table('products')->insert([
            'name' => 'Beat gris',
            'description' => 'La Transparence filtre naturellement les bruits ambiants pour vous aider à rester attentif à ce qui se passe autour de vous.',
            'photo' => 'https://www.beatsbydre.com/content/dam/beats/web/product/headphones/solo-pro/global/ecom/product-tiles/sp-global-producttilev2-grey.png.large.1x.png',
            'price' => 299.95
        ]);
    }
}
