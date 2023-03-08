<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nation')->nullable()->default(null);
            $table->string('id_number')->nullable()->default(null);
            $table->string('area_code')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->string('birthdate')->nullable()->default(null);
            $table->string('cellphone')->nullable()->default(null);
            $table->string('housephone')->nullable()->default(null);
            $table->string('emergency_name')->nullable()->default(null);
            $table->string('emergency_phone')->nullable()->default(null);
            $table->string('emergency_relationship')->nullable()->default(null);
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
            $table->dropColumn('nation');
            $table->dropColumn('id_number');
            $table->dropColumn('area_code');
            $table->dropColumn('address');
            $table->dropColumn('gender');
            $table->dropColumn('birthdate');
            $table->dropColumn('cellphone');
            $table->dropColumn('housephone');
            $table->dropColumn('emergency_name');
            $table->dropColumn('emergency_phone');
            $table->dropColumn('emergency_relationship');
        });
    }
};
