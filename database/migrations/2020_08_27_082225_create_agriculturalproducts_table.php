<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgriculturalproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agriculturalproducts', function (Blueprint $table) {
             $table->id();
            $table->string('productsname');
            $table->string('productsvendor');
            $table->string('productsimage');
            $table->string('productsleastprice');
            $table->mediumText('productsdescription');
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
        Schema::dropIfExists('agriculturalproducts');
    }
}
