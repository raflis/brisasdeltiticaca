<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('workshop_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->datetime('event_date');
            $table->text('description');
            $table->string('image1');
            $table->string('image2');
            $table->string('banner1');
            $table->string('banner2');
            $table->json('images')->nullable();
            $table->timestamps();

            $table->foreign('workshop_id')->references('id')->on('workshops')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop_events');
    }
}
