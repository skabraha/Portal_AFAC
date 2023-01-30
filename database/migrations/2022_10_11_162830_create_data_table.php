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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email');
            // $table->string('password');
            // $table->string('anio')->default(0);
            // $table->string('mes')->default(0);
            // $table->string('quincena')->default(0);
            // -----------------XML
            $table->foreign('NumEmpleado')->references('username')->on('users')->onDelete('set null');
            $table->text('id_main')->nullable();
            $table->text('totalregs')->nullable();
            $table->string('Num')->nullable();
            $table->text('id2')->nullable();
            $table->text('Certificado')->nullable();
            $table->text('Descuento')->nullable();
            $table->text('Fecha')->nullable();
            $table->text('Folio')->nullable();
            $table->text('FormaPago')->nullable();
            $table->text('LugarExpedicion')->nullable();
            $table->text('MetodoPago')->nullable();
            $table->text('Moneda')->nullable();
            $table->text('NoCertificado')->nullable();
            $table->text('Sello')->nullable();
            $table->text('Serie')->nullable();
            $table->text('SubTotal')->nullable();
            $table->text('TipoDeComprobante')->nullable();
            $table->text('Total')->nullable();
            $table->text('Version')->nullable();
            $table->text('Nombre')->nullable();
            $table->text('RegimenFiscal')->nullable();
            $table->text('Rfc')->nullable();
            $table->text('Nombre3')->nullable();
            $table->text('Rfc4')->nullable();
            $table->text('UsoCFDI')->nullable();
            $table->text('Cantidad')->nullable();
            $table->text('ClaveProdServ')->nullable();
            $table->text('ClaveUnidad')->nullable();
            $table->text('Descripcion')->nullable();
            $table->text('Descuento5')->nullable();
            $table->text('Importe')->nullable();
            $table->text('ValorUnitario')->nullable();
            $table->text('FechaFinalPago')->nullable();
            $table->text('FechaInicialPago')->nullable();
            $table->text('FechaPago')->nullable();
            $table->text('NumDiasPagados')->nullable();
            $table->text('TipoNomina')->nullable();
            $table->text('TotalDeducciones')->nullable();
            $table->text('TotalPercepciones')->nullable();
            $table->text('TotalOtrosPagos')->nullable();
            $table->text('Version6')->nullable();
            $table->text('RegistroPatronal')->nullable();
            $table->text('Antigüedad')->nullable();
            $table->text('Banco')->nullable();
            $table->text('ClaveEntFed')->nullable();
            $table->text('CuentaBancaria')->nullable();
            $table->text('Curp')->nullable();
            $table->text('Departamento')->nullable();
            $table->text('FechaInicioRelLaboral')->nullable();
            //$table->text('NumEmpleado')->nullable();
            $table->text('NumSeguridadSocial')->nullable();
            $table->text('PeriodicidadPago')->nullable();
            $table->text('Puesto')->nullable();
            $table->text('RiesgoPuesto')->nullable();
            $table->text('SalarioDiarioIntegrado')->nullable();
            $table->text('Sindicalizado')->nullable();
            $table->text('TipoContrato')->nullable();
            $table->text('TipoRegimen')->nullable();
            $table->text('TotalExento')->nullable();
            $table->text('TotalGravado')->nullable();
            $table->text('TotalSueldos')->nullable();
            $table->text('Clave')->nullable();
            $table->text('Concepto')->nullable();
            $table->text('ImporteExento')->nullable();
            $table->text('ImporteGravado')->nullable();
            $table->text('TipoPercepcion')->nullable();
            $table->text('TotalImpuestosRetenidos')->nullable();
            $table->text('TotalOtrasDeducciones')->nullable();
            $table->text('Clave7')->nullable();
            $table->text('Concepto8')->nullable();
            $table->text('Importe9')->nullable();
            $table->text('TipoDeduccion')->nullable();
            $table->text('Importe10')->nullable();
            $table->text('Concepto11')->nullable();
            $table->text('Clave12')->nullable();
            $table->text('TipoOtroPago')->nullable();
            $table->text("DiasIncapacidad")->nullable();
            $table->text("TipoIncapacidad")->nullable();
            $table->text("ImporteMonetario")->nullable();
      
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
};
