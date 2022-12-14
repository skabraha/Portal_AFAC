<?php

namespace App\Imports;

use App\Models\Data;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class DatasImport implements ToCollection, WithHeadingRow, WithBatchInserts, WithChunkReading, ShouldQueue
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        // if ($row[0] != 'DATA') {

        // 'name'     => $row['name'],
        // 'email'    => $row['email'],
        // 'password' => Hash::make($row['password']),
        // 'anio'    => $row['anio'],
        // 'mes'    => $row['mes'],
        // 'quincena'    => $row['quincena'],
        // ---------------------XML
        foreach ($rows as $row) {

            $NominaUp = Data::create([
                'id_main' => $row['id_main'],
                'totalregs' => $row['totalregs'],
                'Num' => $row['Num'],
                'id2' => $row['id2'],
                'Certificado' => $row['Certificado'],
                'Descuento' => $row['Descuento'],
                'Fecha' => $row['Fecha'],
                'Folio' => $row['Folio'],
                'FormaPago' => $row['FormaPago'],
                'LugarExpedicion' => $row['LugarExpedicion'],
                'MetodoPago' => $row['MetodoPago'],
                'Moneda' => $row['Moneda'],
                'NoCertificado' => $row['NoCertificado'],
                'Sello' => $row['Sello'],
                'Serie' => $row['Serie'],
                'SubTotal' => $row['SubTotal'],
                'TipoDeComprobante' => $row['TipoDeComprobante'],
                'Total' => $row['Total'],
                'Version' => $row['Version'],
                'Nombre' => $row['Nombre'],
                'RegimenFiscal' => $row['RegimenFiscal'],
                'Rfc' => $row['Rfc'],
                'Nombre3' => $row['Nombre3'],
                'Rfc4' => $row['Rfc4'],
                'UsoCFDI' => $row['UsoCFDI'],
                'Cantidad' => $row['Cantidad'],
                'ClaveProdServ' => $row['ClaveProdServ'],
                'ClaveUnidad' => $row['ClaveUnidad'],
                'Descripcion' => $row['Descripcion'],
                'Descuento5' => $row['Descuento5'],
                'Importe' => $row['Importe'],
                'ValorUnitario' => $row['ValorUnitario'],
                'FechaFinalPago' => $row['FechaFinalPago'],
                'FechaInicialPago' => $row['FechaInicialPago'],
                'FechaPago' => $row['FechaPago'],
                'NumDiasPagados' => $row['NumDiasPagados'],
                'TipoNomina' => $row['TipoNomina'],
                'TotalDeducciones' => $row['TotalDeducciones'],
                'TotalPercepciones' => $row['TotalPercepciones'],
                'TotalOtrosPagos' => $row['TotalOtrosPagos'],
                'Version6' => $row['Version6'],
                'RegistroPatronal' => $row['RegistroPatronal'],
                'Antig??edad' => $row['Antig??edad'],
                'Banco' => $row['Banco'],
                'ClaveEntFed' => $row['ClaveEntFed'],
                'CuentaBancaria' => $row['CuentaBancaria'],
                'Curp' => $row['Curp'],
                'Departamento' => $row['Departamento'],
                'FechaInicioRelLaboral' => $row['FechaInicioRelLaboral'],
                'NumEmpleado' => $row['NumEmpleado'],
                'NumSeguridadSocial' => $row['NumSeguridadSocial'],
                'PeriodicidadPago' => $row['PeriodicidadPago'],
                'Puesto' => $row['Puesto'],
                'RiesgoPuesto' => $row['RiesgoPuesto'],
                'SalarioDiarioIntegrado' => $row['SalarioDiarioIntegrado'],
                'Sindicalizado' => $row['Sindicalizado'],
                'TipoContrato' => $row['TipoContrato'],
                'TipoRegimen' => $row['TipoRegimen'],
                'TotalExento' => $row['TotalExento'],
                'TotalGravado' => $row['TotalGravado'],
                'TotalSueldos' => $row['TotalSueldos'],
                'Clave' => $row['Clave'],
                'Concepto' => $row['Concepto'],
                'ImporteExento' => $row['ImporteExento'],
                'ImporteGravado' => $row['ImporteGravado'],
                'TipoPercepcion' => $row['TipoPercepcion'],
                'TotalImpuestosRetenidos' => $row['TotalImpuestosRetenidos'],
                'TotalOtrasDeducciones' => $row['TotalOtrasDeducciones'],
                'Clave7' => $row['Clave7'],
                'Concepto8' => $row['Concepto8'],
                'Importe9' => $row['Importe9'],
                'TipoDeduccion' => $row['TipoDeduccion'],
                'Importe10' => $row['Importe10'],
                'Concepto11' => $row['Concepto11'],
                'Clave12' => $row['Clave12'],
                'TipoOtroPago' => $row['TipoOtroPago'],
                'DiasIncapacidad' => $row['DiasIncapacidad'],
                'TipoIncapacidad' => $row['TipoIncapacidad'],
                'ImporteMonetario' => $row['ImporteMonetario'],
            ]);
        }
    }
    // }
    public function batchSize(): int
    {
        return 500;
    }
    public function chunkSize(): int
    {
        return 500;
    }
}
