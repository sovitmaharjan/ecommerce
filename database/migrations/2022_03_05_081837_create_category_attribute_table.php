<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_attribute', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('id')->onDelete('cascade');
            $table->foreignId('attibute_id')->constrained('id');
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
        Schema::table('category_attribute', function (Blueprint $table) {
            //
        });
    }
}
