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
            $table->longText('description');
            $table->enum('status', ['draft', 'published', 'inactive', 'suspended'])->default('Draft');
            $table->foreignId('category_id')->constrained();
            $table->json('tags')->nullable();
            $table->text('video_url')->nullable();
            $table->decimal('price', 10, 2);
            $table->enum('discount_option', [1, 2, 3]);
            $table->decimal('discount', 10, 2)->nullable();
            $table->decimal('vat', 10, 2)->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->foreignId('user_id')->constrained();
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
