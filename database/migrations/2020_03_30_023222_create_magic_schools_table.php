<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagicSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magic_schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug', 100)->nullable()->default('text');
            $table->string('name', 100)->nullable()->default('text');
            $table->string('desc', 100)->nullable()->default('text');

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
        Schema::dropIfExists('magic_schools');
    }
}
