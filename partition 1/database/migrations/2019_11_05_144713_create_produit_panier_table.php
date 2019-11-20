<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitPanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits_panier', function (Blueprint $table) {
            $table->increments('id');
           $table->integer('produits_id')->unsigned()->nullable();
            $table->integer('panier_id')->unsigned()->nullable();
            $table->timestamps();
        });

       Schema::table('produits_panier', function (Blueprint $table) {
            $table->foreign('produits_id')->references('id')->on('produits');
            $table->foreign('panier_id')->references('id')->on('panier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit_panier');
    }
}
