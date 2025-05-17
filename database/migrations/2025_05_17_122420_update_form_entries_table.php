<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormEntriesTable extends Migration
{
    public function up()
    {
        Schema::table('form_entries', function (Blueprint $table) {
            if (Schema::hasColumn('form_entries', 'name')) {
                $table->dropColumn('name');
            }

            if (Schema::hasColumn('form_entries', 'phone')) {
                $table->dropColumn('phone');
            }

            if (Schema::hasColumn('form_entries', 'address')) {
                $table->dropColumn('address');
            }
        });

        // Rename column only if it exists
        if (Schema::hasColumn('form_entries', 'number')) {
            Schema::table('form_entries', function (Blueprint $table) {
                $table->renameColumn('number', 'phone');
            });
        }
    }


    public function down()
    {
        Schema::table('form_entries', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('phone')->nullable(); // This will fail unless "phone" was dropped
            $table->text('address')->nullable();
        });

        Schema::table('form_entries', function (Blueprint $table) {
            $table->renameColumn('phone', 'number');
        });
    }
};
