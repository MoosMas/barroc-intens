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
    // TODO: Zorgen dat we deze tabel niet meer nodig hebben. Uit controllers en modellen weghalen. Producten worden nu gelinkt aan een contract en niet aan een factuur.
    public function up()
    {
        Schema::create('custom_invoice_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('custom_invoice_id')
                ->references('id')
                ->on('custom_invoices');
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
        Schema::dropIfExists('custom_invoice_product');
    }
};
