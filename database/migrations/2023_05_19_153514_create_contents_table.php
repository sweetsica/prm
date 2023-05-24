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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('typeContent')->nullable();
            $table->text('urlContent')->nullable();
            $table->text('descriptionContent')->nullable();
            $table->text('linkContent')->nullable();
            $table->string('positionContent')->nullable();
            $table->string('shortcodeContent')->unique()->nullable();
            $table->text('noticeContent')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
};
