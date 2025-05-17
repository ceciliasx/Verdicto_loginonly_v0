<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('form_entries', function (Blueprint $table) {
            $table->string('address')->nullable();
        });
    }

    public function down()
    {
        Schema::table('form_entries', function ($table) {
            $table->dropColumn(['name', 'phone', 'address']);
        });
    }

};
