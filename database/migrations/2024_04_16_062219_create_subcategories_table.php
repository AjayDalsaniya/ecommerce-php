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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id('isid');
            $table->string('subcategory_name', 60);
            $table->text('subcategory_description');
            $table->string('subcategory_image')->nullable();
            $table->unsignedBigInteger('item_cat_id'); // Corrected column name
            $table->foreign('item_cat_id')->references('icid')->on('item_categories')->onDelete('cascade')->onUpdate('cascade'); // Corrected foreign key syntax
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
