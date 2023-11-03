<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('background')->nullable();
            $table->string('product_name')->nullable();
            $table->text('desc')->nullable();
            $table->string('title_details')->nullable();
            $table->string('subtitle_details')->nullable();
            $table->text('desc1')->nullable();
            $table->string('tag1')->nullable();
            $table->string('tag2')->nullable();
            $table->string('tag_p1')->nullable();
            $table->string('tag_p2')->nullable();
            $table->string('title_desc2')->nullable();
            $table->text('desc2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
