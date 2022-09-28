<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDepartmentProvinceDistrictTelephoneToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('birth_department')->nullable()->after('membership');
            $table->string('birth_province')->nullable()->after('membership');
            $table->string('birth_district')->nullable()->after('membership');
            $table->string('department')->nullable()->after('membership');
            $table->string('province')->nullable()->after('membership');
            $table->string('district')->nullable()->after('membership');
            $table->string('address')->nullable()->after('membership');
            $table->string('landline')->nullable()->after('membership');
            $table->string('telephone')->nullable()->after('membership');
            $table->string('profession')->nullable()->after('membership');
            $table->string('partner_type')->nullable()->after('membership');
            $table->integer('debt')->default(0)->after('membership');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
