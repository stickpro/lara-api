<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('model', 64);
            $table->string('sku', 64);
            $table->string('upc', 64);
            $table->string('ean', 64);
            $table->string('jan', 64);
            $table->string('isbn', 64);
            $table->string('mpn', 64);
            $table->string('location', 64);
            $table->mediumInteger('quantity')->default(0);
            $table->mediumInteger('stock_status_id');
            $table->string('image',255)->nullable();
            $table->unsignedBigInteger('manufacturer_id');
            $table->boolean('shipping')->default(1);
            $table->decimal('price', 15, 4)->default('0.0000');
            $table->boolean('status')->default(1);
            $table->mediumInteger('viewed')->default(0);
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
