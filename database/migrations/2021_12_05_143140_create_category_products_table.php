<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->id();

            $table->foreignId("prev")
                ->nullable()
                ->references('id')
                ->on("category_products")
                ->cascadeOnUpdate();

            $table->string("category")->index();

//            $table->foreignId("next")
//                ->nullable()
//                ->references('id')
//                ->on("category_products")
//                ->cascadeOnUpdate();
            $table->json("next")->default(collect([])->toJson());

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_products');
    }
}
