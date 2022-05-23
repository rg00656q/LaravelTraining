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
        Schema::create('discussion_user', function (Blueprint $table) {
            $table->foreignId('discussion_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
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
        Schema::table('discussion_user', function (Blueprint $table) {
            $table->dropForeign(['discussion_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::rename('discussion_user', 'droppable');
        Schema::dropIfExists('droppable');
    }
};
