<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveColumnToVideoReelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('video_reels', function (Blueprint $table) {
            $table->boolean('active')->default(true)->after('embed_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video_reels', function (Blueprint $table) {
            $table->dropColumn('active');
        });
    }
}
