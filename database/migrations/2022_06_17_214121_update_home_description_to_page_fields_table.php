<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHomeDescriptionToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->text('home_text')->nullable()->change();
            $table->text('home_description')->nullable()->change();
            $table->text('aboutus_text')->nullable()->change();
            $table->text('aboutus_mission')->nullable()->change();
            $table->text('aboutus_vision')->nullable()->change();
            $table->text('workshops_text')->nullable()->change();
            $table->text('blog_text')->nullable()->change();
            $table->text('contact_map')->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            //
        });
    }
}
