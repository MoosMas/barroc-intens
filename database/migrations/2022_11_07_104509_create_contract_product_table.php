<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_id')
                ->references('id')
                ->on('contracts');
            $table->foreignId('product_id')
                ->references('id')
                ->on('products');
            $table->integer('amount');
            $table->decimal('price_per_product');
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
        Schema::dropIfExists('contract_product');
    }
};
