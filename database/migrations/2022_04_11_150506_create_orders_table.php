<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->foreignId('user_id')->constrained();
            $table->float('sub_total');
            $table->float('tax')->nullable();
            $table->float('vat')->nullable();
            $table->float('discount')->nullable();
            $table->float('grand_total');
            $table->enum('status', ['placed', 'processing', 'shipped', 'delivered', 'cancelled']);
            $table->json('user_address');
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
        Schema::dropIfExists('orders');
    }
}
