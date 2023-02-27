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
        Schema::table('customers', function (Blueprint $table) {
            $table->text('note')->nullable()->after('address');
        });
        Schema::table('histories', function (Blueprint $table) {
            $table->string('ipaddress')->nullable()->after('product_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('customers', 'note'))
        {
            Schema::table('customers', function (Blueprint $table)
            {
                $table->dropColumn('note');
            });
        }
        if (Schema::hasColumn('histories', 'ipaddress'))
        {
            Schema::table('histories', function (Blueprint $table)
            {
                $table->dropColumn('ipaddress');
            });
        }
    }
};
