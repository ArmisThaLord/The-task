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
        Schema::create('package', function (Blueprint $table) {
            $table->unsignedbigInteger('gift_id');
            $table->unsignedbigInteger('campaing_id');
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
        Schema::table('package', static function (Blueprint $table) {
            $table->removeColumn('timestamps');
            $table->removeColumn('campaing_id');
            $table->removeColumn('gift_id');
        });
    }
};
