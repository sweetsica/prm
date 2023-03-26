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
        Schema::table('nova_notifications', function (Blueprint $table) {
            if (!Schema::hasColumn('nova_notifications', 'deleted_at')) {
                $table->string('deleted_at')->nullable()->after('created_at');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nova_notifications', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
};
