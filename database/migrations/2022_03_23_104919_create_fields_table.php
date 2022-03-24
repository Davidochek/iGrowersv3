<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->integer('farmer_id');
            $table->string('farmsize');
            $table->string('fwithhomestead');
            $table->string('farmanimals');
            $table->string('farmblocks');
            $table->string('farmblocksno');
            $table->string('farmcertifications');
            $table->string('farmownership');
            $table->string('farmtransport');
            $table->string('fmaincrop');
            $table->string('fothercrop');
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
        Schema::dropIfExists('fields');
    }
}
