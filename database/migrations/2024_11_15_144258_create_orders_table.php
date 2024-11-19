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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->string('name');
            $table->string('email');
            $table->string('domain_name');
            $table->string('bukti_tf');
            $table->string('catatan');
            $table->enum('status', ['pending', 'success', 'cancel']);

            $table->foreignId('id_product')->constrained('products', 'id_product')->onDelete('cascade');
            $table->foreignId('id_user')->constrained('users', 'id')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
