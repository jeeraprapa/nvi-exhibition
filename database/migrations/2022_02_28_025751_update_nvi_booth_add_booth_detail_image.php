<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNviBoothAddBoothDetailImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nvi_booths', function (Blueprint $table) {
            $table->string('booth_detail_image')->after('booth_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nvi_booths', function (Blueprint $table) {
            $table->dropColumn('booth_detail_image');
        });
    }
}
