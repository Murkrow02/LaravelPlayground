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
        Schema::table('games', function (Blueprint $table) {
            $table->string('img');
            $table->integer('original_id');
            $table->string('platform');
            $table->enum('type', ['wishlist', 'played', 'not played','playing']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('img');
            $table->dropColumn('platform');
            $table->dropColumn('original_id');
            $table->dropColumn('type');
        });
    }
};
