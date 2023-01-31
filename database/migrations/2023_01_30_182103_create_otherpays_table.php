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
        Schema::create('otherpays', function (Blueprint $table) {
            $table->id();
            $table->text('NumEmpleado')->nullable();
            $table->date('pay_day_o')->nullable();
            $table->text('type_o')->nullable();
            $table->text('key_o')->nullable();
            $table->text('concept_o')->nullable();
            $table->text('importe_o')->nullable();  
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
        Schema::dropIfExists('otherpays');
    }
};
