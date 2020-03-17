<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_name');
            $table->string('img_url');
            $table->string('title');
            //$table->string('title_kz');
            //$table->string('title_en');
            $table->string('date');
            //$table->string('date_kz');
            //$table->string('date_en');
            $table->string('location');
            //$table->string('location_kz');
            //$table->string('location_en');
            $table->string('equipment');
            //$table->string('equipment_kz');
            //$table->string('equipment_ru');
            $table->string('url');
            //$table->boolean('is_active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
