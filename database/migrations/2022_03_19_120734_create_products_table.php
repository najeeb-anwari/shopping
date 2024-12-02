<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string("name");
            $table->decimal('price')->unsigned();
            $table->decimal('old_price')->unsigned()->nullable();
            $table->text("description");
            $table->integer("total_stock");
            $table->foreignId('seller_id')
                ->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
            
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
};
