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
        Schema::create('data2s', function (Blueprint $table) {
            $table->id();
            $table->text('NumSeguridadSocial');
            $table->text('PeriodicidadPago');
            $table->text('Puesto');
            $table->text('RiesgoPuesto');
            $table->text('SalarioDiarioIntegrado');
            $table->text('Sindicalizado');
            $table->text('TipoContrato');
            $table->text('TipoRegimen');
            $table->text('TotalExento');
            $table->text('TotalGravado');
            $table->text('TotalSueldos');
            $table->text('Clave');
            $table->text('Concepto');
            $table->text('ImporteExento');
            $table->text('ImporteGravado');
            $table->text('TipoPercepcion');
            $table->text('TotalImpuestosRetenidos');
            $table->text('TotalOtrasDeducciones');
            $table->text('Clave7');
            $table->text('Concepto8');
            $table->text('Importe9');
            $table->text('TipoDeduccion');
            $table->text('Importe10');
            $table->text('Concepto11');
            $table->text('Clave12');
            $table->text('TipoOtroPago');
            $table->text('SubsidioCausado');
            $table->text('Version13');
            $table->text('UUID');
            $table->text('FechaTimbrado');
            $table->unsignedBigInteger('data_id')->nullable();
            $table->foreign('data_id')->references('id')->on('data')->onDelete('set null');
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
        Schema::dropIfExists('data2s');
    }
};
