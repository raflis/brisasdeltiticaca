<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_fields', function (Blueprint $table) {
            $table->id();
            $table->string('home_title');
            $table->text('home_text');
            $table->string('home_image');
            $table->text('home_description');
            $table->json('home_items')->nullable();
            $table->string('aboutus_title1');
            $table->string('aboutus_title2');
            $table->string('aboutus_background');
            $table->string('aboutus_title3');
            $table->text('aboutus_text');
            $table->json('aboutus_images')->nullable();
            $table->string('history_title');
            $table->text('aboutus_mission');
            $table->text('aboutus_vision');
            $table->string('events_title1');
            $table->string('events_title2');
            $table->string('events_image');
            $table->string('workshops_title1');
            $table->string('workshops_title2');
            $table->string('workshops_image');
            $table->text('workshops_text');
            $table->json('workshops_images')->nullable();
            $table->string('blog_title1');
            $table->string('blog_title2');
            $table->string('blog_image');
            $table->text('blog_text');
            $table->string('contact_title1');
            $table->string('contact_title2');
            $table->string('contact_image');
            $table->text('contact_map');
            $table->string('contact_telephone');
            $table->string('contact_email');
            $table->string('contact_address');
            $table->string('contact_schedule1');
            $table->string('contact_schedule2');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('whatsapp');
            $table->string('youtube');
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
        Schema::dropIfExists('page_fields');
    }
}
