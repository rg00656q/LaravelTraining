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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->nullOnDelete();
            $table->foreignId('discussion_id')->constrained()->cascadeOnDelete();
            $table->text('content');
            $table->timestamps();

            // avant Laravel 7.0
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('discussion_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('discussion_id')->references('id')->on('discussions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['discussion_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('messages');
    }
};
