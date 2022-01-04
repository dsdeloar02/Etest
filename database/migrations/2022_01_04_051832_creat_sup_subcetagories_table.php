<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatSupSubcetagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sup_subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('sup_subcategories_name');
            $table->string('sup_subcategories_icon');
            $table->string('sup_subcategories_slug');
            $table->BigInteger('subcategories_id')->unsigned;
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
        //
    }
}
