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
        Schema::create('ordered_items', function (Blueprint $table) {
            $table->id('orderitemid');
            $table->unsignedBigInteger('odr_id')->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('subtotal')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('odr_id')->references('oid')->on('odrs')->onDelete('set null');
            $table->foreign('item_id')->references('iid')->on('items')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordered_items');
    }
};
