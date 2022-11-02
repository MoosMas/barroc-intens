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
        Schema::create('maintenance_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')
                ->references('id')
                ->on('companies');
            $table->string('title');
            $table->longText('remark');
            $table->dateTime('start')->nullable();
            $table->integer('duration_minutes')->nullable();
            $table->foreignId('employee_id')
                ->nullable()
                ->constrained('users');
            $table->foreignId('work_order_id')
                ->nullable()
                ->constrained('work_order');
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
        Schema::dropIfExists('maintenance_appointments');
    }
};
