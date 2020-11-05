<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainproducts', function (Blueprint $table) {
            $table->id();
            $table->string('productsname');
            $table->string('productsleastprice');
            $table->string('productsvendor');
            $table->string('productsimage');
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
        Schema::dropIfExists('mainproducts');
    }
}
