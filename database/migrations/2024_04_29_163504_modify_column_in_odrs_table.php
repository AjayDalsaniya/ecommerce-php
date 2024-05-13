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
        Schema::table('odrs', function (Blueprint $table) {
            //
            if (Schema::hasColumn('odrs', 'order_status')) {
                $table->string('order_status', 50)->default('Pending')->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('odrs', function (Blueprint $table) {
            //
        });
    }
};
