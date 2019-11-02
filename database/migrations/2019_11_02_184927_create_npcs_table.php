<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpcsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('npcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type');
            $table->string('name');
            $table->ipAddress('ip_address')->unique();
            $table->string('password');

            $table->longText('webserver')->nullable()->default(null);

            $table->dateTime('last_reset');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('npcs');
    }
}
