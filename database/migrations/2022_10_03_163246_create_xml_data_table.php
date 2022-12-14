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
        Schema::create('xml_data', function (Blueprint $table) {
            $table->id();
            $table->string("name", 120);
            $table->integer("cantidad");
            $table->string("category", 20);
            $table->string("price", 10);
            $table->integer("total_videos");
            // -----------------------------
            // $table->text('id');
            // $table->text('totalregs');
            // $table->text('Num');
            // $table->text('id2');
            // $table->text('Certificado');
            // $table->text('Descuento');
            // $table->text('Fecha');
            // $table->text('Folio');
            // $table->text('FormaPago');
            // $table->text('LugarExpedicion');
            // $table->text('MetodoPago');
            // $table->text('Moneda');
            // $table->text('NoCertificado');
            // $table->text('Sello');
            // $table->text('Serie');
            // $table->text('SubTotal');
            // $table->text('TipoDeComprobante');
            // $table->text('Total');
            // $table->text('Version');
            // $table->text('Nombre');
            // $table->text('RegimenFiscal');
            // $table->text('Rfc');
            // $table->text('Nombre3');
            // $table->text('Rfc4');
            // $table->text('UsoCFDI');
            // $table->text('Cantidad');
            // $table->text('ClaveProdServ');
            // $table->text('ClaveUnidad');
            // $table->text('Descripcion');
            // $table->text('Descuento5');
            // $table->text('Importe');
            // $table->text('ValorUnitario');
            // $table->text('FechaFinalPago');
            // $table->text('FechaInicialPago');
            // $table->text('FechaPago');
            // $table->text('NumDiasPagados');
            // $table->text('TipoNomina');
            // $table->text('TotalDeducciones');
            // $table->text('TotalPercepciones');
            // $table->text('TotalOtrosPagos');
            // $table->text('Version6');
            // $table->text('RegistroPatronal');
            // $table->text('Antigüedad');
            // $table->text('Banco');
            // $table->text('ClaveEntFed');
            // $table->text('CuentaBancaria');
            // $table->text('Curp');
            // $table->text('Departamento');
            // $table->text('FechaInicioRelLaboral');
            // $table->text('NumEmpleado');
            // $table->text('NumSeguridadSocial');
            // $table->text('PeriodicidadPago');
            // $table->text('Puesto');
            // $table->text('RiesgoPuesto');
            // $table->text('SalarioDiarioIntegrado');
            // $table->text('Sindicalizado');
            // $table->text('TipoContrato');
            // $table->text('TipoRegimen');
            // $table->text('TotalExento');
            // $table->text('TotalGravado');
            // $table->text('TotalSueldos');
            // $table->text('Clave');
            // $table->text('Concepto');
            // $table->text('ImporteExento');
            // $table->text('ImporteGravado');
            // $table->text('TipoPercepcion');
            // $table->text('TotalImpuestosRetenidos');
            // $table->text('TotalOtrasDeducciones');
            // $table->text('Clave7');
            // $table->text('Concepto8');
            // $table->text('Importe9');
            // $table->text('TipoDeduccion');
            // $table->text('Importe10');
            // $table->text('Concepto11');
            // $table->text('Clave12');
            // $table->text('TipoOtroPago');
            // $table->text('SubsidioCausado');
            // $table->text("DiasIncapacidad");
            // $table->text("TipoIncapacidad");
            // $table->text("ImporteMonetario");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xml_data');
    }
};
