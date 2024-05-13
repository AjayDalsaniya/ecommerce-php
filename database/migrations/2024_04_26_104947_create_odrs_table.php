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
        Schema::create('odrs', function (Blueprint $table) {
            $table->id('oid');
            $table->string('orderfname', 150)->nullable();
            $table->string('orderlname', 150)->nullable();
            $table->string('orderemail', 150)->nullable();
            $table->string('ordermobile', 150)->nullable();
            $table->date('order_date')->nullable();
            $table->dateTime('cancel_order_date')->nullable();
            $table->dateTime('order_delivery_date')->nullable();
            $table->text('order_delivery_address');
            $table->string('city', 150);
            $table->float('total_amount');
            $table->string('order_payment_method', 150);
            $table->string('payment_id', 250)->nullable();
            $table->enum('order_status', ['Pending', 'Out for shipping', 'Completed'])->default('Pending');
            $table->text('message')->nullable();
            $table->string('tracking_no', 150)->nullable();
            $table->tinyInteger('is_cancel_order')->default(0);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('iduser')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odrs');
    }
};
