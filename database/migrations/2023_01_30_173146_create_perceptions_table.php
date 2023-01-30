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
        Schema::create('perceptions', function (Blueprint $table) {
            $table->id();
            $table->foreign('NumEmpleado')->references('username')->on('users')->onDelete('set null');
            $table->date('pay_day');
            $table->string('type');
            $table->string('key');
            $table->string('concept');
            $table->string('imp_gravado');  
            $table->string('imp_exento');
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
        Schema::dropIfExists('perceptions');
    }
};
