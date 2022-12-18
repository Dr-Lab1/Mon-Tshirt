<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produits', function (Blueprint $table) {
            //
            $table -> integer('category_id') -> unsigned() -> nullable();

            $table  -> foreign('category_id') 
                    -> references('id') 
                    -> on('categories') 
                    -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produits', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table -> dropForeign(['category_id']);
        });
    }
}
