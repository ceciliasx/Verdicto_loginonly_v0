<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneAndPasswordToFormEntriesTable extends Migration
{
    public function up()
    {
        Schema::table('form_entries', function (Blueprint $table) {
            if (!Schema::hasColumn('form_entries', 'phone')) {
                $table->string('phone', 20)->nullable();
            }

            if (!Schema::hasColumn('form_entries', 'password')) {
                $table->string('password')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('form_entries', function (Blueprint $table) {
            if (Schema::hasColumn('form_entries', 'phone')) {
                $table->dropColumn('phone');
            }

            if (Schema::hasColumn('form_entries', 'password')) {
                $table->dropColumn('password');
            }
        });
    }
}

