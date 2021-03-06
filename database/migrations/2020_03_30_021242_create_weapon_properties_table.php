<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapon_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug', 100)->nullable()->default('text');
            $table->string('name', 100)->nullable()->default('text');
            $table->string('desc', 500)->nullable()->default('text');
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
        Schema::dropIfExists('weapon_properties');
    }
}
