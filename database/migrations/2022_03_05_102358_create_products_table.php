<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('sub_category_id')->constrained('categories');
            $table->foreignId('sub_sub_category_id')->constrained('categories');
            $table->text('video_url');
            $table->longText('description');
            $table->string('seo_title');
            $table->longText('seo_description');
            $table->float('base_price');
            $table->enum('status', ['draft', 'published', 'inactive', 'suspended'])->default('Draft');
            $table->unsignedBigInteger('vendor_id');
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
        Schema::dropIfExists('products');
    }
}