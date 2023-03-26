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
        Schema::table('histories', function (Blueprint $table) {
            if (!Schema::hasColumn('histories', 'ipaddress')) {
                $table->text('ipaddress')->nullable()->after('product_name');
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
        if (Schema::hasColumn('histories', 'ipaddress'))
        {
            Schema::table('histories', function (Blueprint $table)
            {
                $table->dropColumn('ipaddress');
            });
        }
    }
};
