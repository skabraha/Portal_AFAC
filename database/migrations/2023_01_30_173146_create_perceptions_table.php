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
            $table->text('NumEmpleado')->nullable();
            $table->date('pay_day_p')->nullable();
            $table->text('type_p')->nullable();
            $table->text('key_p')->nullable();
            $table->text('concept_p')->nullable();
            $table->text('imp_gravado')->nullable();
            $table->text('imp_exento')->nullable();
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
