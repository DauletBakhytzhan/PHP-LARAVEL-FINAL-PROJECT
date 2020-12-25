<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGooglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('googles', function (Blueprint $table) {
            $table->id();
            $table->integer(\App\Models\User1::class);
            $table->integer(\App\Models\Kitchen::class);
            $table->double('address_ind');
            $table->double('food_ind');
            $table->double('price_ind');
            $table->integer(\App\Models\review::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('googles');
    }
}
