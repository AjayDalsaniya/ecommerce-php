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
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cid');
$table->unsignedBigInteger('user_id')->nullable();
$table->unsignedBigInteger('item_id')->nullable();
$table->timestamps();

// Foreign key constraints
$table->foreign('user_id')->references('iduser')->on('users')->onDelete('set null');
$table->foreign('item_id')->references('iid')->on('items')->onDelete('set null');

// Regular integer columns, not auto-incremented primary keys
$table->integer('quentity')->nullable();
$table->integer('price')->nullable();
$table->integer('totalprice')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
