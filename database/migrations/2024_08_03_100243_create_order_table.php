<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer('table');
            $table->string('name');
            $table->string('variant')->comment('Makanan: 1 = Goreng, 2 = Kuah. Minuman: 1 = Dingin, 2 = Panas, 3 = Manis, 4 = Tawar.');
            $table->integer('category')->comment('1 = Makanan, 2 = Minuman');
            $table->integer('qty');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
