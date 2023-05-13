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
        Schema::table('q_r_s', function (Blueprint $table) {
            $table->string('excel')->default('Unactive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('q_r_s', 'excel'))
        {
            Schema::table('q_r_s', function (Blueprint $table)
            {
                $table->dropColumn('excel');
            });
        }
    }
};
