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
            if (Schema::hasColumn('odrs', 'order_delivery_address')) {
                $table->text('order_delivery_address', 255)->nullable()->change();
            }

            if (Schema::hasColumn('odrs', 'city')) {
                $table->string('city', 150)->nullable()->change();
            }

            if (Schema::hasColumn('odrs', 'total_amount')) {
                $table->float('total_amount')->nullable()->change();
            }

            if (Schema::hasColumn('odrs', 'order_payment_method')) {
                $table->string('order_payment_method', 150)->nullable()->change();
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
