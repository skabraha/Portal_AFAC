<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;

class DatasImport implements ToModel, WithBatchInserts, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // if ($row[0] != 'DATA') {

        return new Data([
            // 'name'     => $row['name'],
            // 'email'    => $row['email'],
            // 'password' => Hash::make($row['password']),
            // 'anio'    => $row['anio'],
            // 'mes'    => $row['mes'],
            // 'quincena'    => $row['quincena'],
            // ---------------------XML
            'id' => $row['0'],
            'totalregs' => $row['1'],
            'Num' => $row['2'],
            'id2' => $row['3'],
            'Certificado' => $row['4'],
            'Descuento' => $row['5'],
            'Fecha' => $row['6'],
            'Folio' => $row['7'],
            'FormaPago' => $row['8'],
            'LugarExpedicion' => $row['9'],
            'MetodoPago' => $row['10'],
            'Moneda' => $row['11'],
            'NoCertificado' => $row['12'],
            'Sello' => $row['13'],
            'Serie' => $row['14'],
            'SubTotal' => $row['15'],
            'TipoDeComprobante' => $row['16'],
            'Total' => $row['17'],
            'Version' => $row['18'],
            'Nombre' => $row['19'],
            'RegimenFiscal' => $row['20'],
            'Rfc' => $row['21'],
            'Nombre3' => $row['22'],
            'Rfc4' => $row['23'],
            'UsoCFDI' => $row['24'],
            'Cantidad' => $row['25'],
            'ClaveProdServ' => $row['26'],
            'ClaveUnidad' => $row['27'],
            'Descripcion' => $row['28'],
            'Descuento5' => $row['29'],
            'Importe' => $row['30'],
            'ValorUnitario' => $row['31'],
            'FechaFinalPago' => $row['32'],
            'FechaInicialPago' => $row['33'],
            'FechaPago' => $row['34'],
            'NumDiasPagados' => $row['35'],
            'TipoNomina' => $row['36'],
            'TotalDeducciones' => $row['37'],
            'TotalPercepciones' => $row['38'],
            'TotalOtrosPagos' => $row['39'],
            'Version6' => $row['40'],
            'RegistroPatronal' => $row['41'],
            'Antigüedad' => $row['42'],
            'Banco' => $row['43'],
            'ClaveEntFed' => $row['44'],
            'CuentaBancaria' => $row['45'],
            'Curp' => $row['46'],
            'Departamento' => $row['47'],
            'FechaInicioRelLaboral' => $row['48'],
            'NumEmpleado' => $row['49'],
            'NumSeguridadSocial' => $row['50'],
            'PeriodicidadPago' => $row['51'],
            'Puesto' => $row['52'],
            'RiesgoPuesto' => $row['53'],
            'SalarioDiarioIntegrado' => $row['54'],
            'Sindicalizado' => $row['55'],
            'TipoContrato' => $row['56'],
            'TipoRegimen' => $row['57'],
            'TotalExento' => $row['58'],
            'TotalGravado' => $row['59'],
            'TotalSueldos' => $row['60'],
            'Clave' => $row['61'],
            'Concepto' => $row['62'],
            'ImporteExento' => $row['63'],
            'ImporteGravado' => $row['64'],
            'TipoPercepcion' => $row['65'],
            'TotalImpuestosRetenidos' => $row['66'],
            'TotalOtrasDeducciones' => $row['67'],
            'Clave7' => $row['68'],
            'Concepto8' => $row['69'],
            'Importe9' => $row['70'],
            'TipoDeduccion' => $row['71'],
            'Importe10' => $row['72'],
            'Concepto11' => $row['73'],
            'Clave12' => $row['74'],
            'TipoOtroPago' => $row['75'],
            'SubsidioCausado' => $row['76'],
            "DiasIncapacidad" => $row['77'],
            "TipoIncapacidad" => $row['78'],
            "ImporteMonetario" => $row['79'],
            // -------------------------------------
            // 'Version13' => $row['Version13'],
            // 'UUID' => $row['UUID'],
            // 'FechaTimbrado' => $row['FechaTimbrado'],
            // 'RfcProvCertif' => $row['RfcProvCertif'],
            // 'SelloCFD' => $row['SelloCFD'],
            // 'NoCertificadoSAT' => $row['NoCertificadoSAT'],
            // 'SelloSAT' => $row['SelloSAT'],
        ]);
    }
    // }
    // private $date_columns = ['C.', 'E', '',]
    // public function bindValue(Cell $cell, $value)
    // {
    //     if (in_array($cell->getColumn(), $this->date_columns)) {
    //         $cell->setValueExplicit(Data::excelToDateTimeObject($value)->format($this->date_format), DataType::TYPE_STRING);

    //         return true;
    //     }

    //     return parent::bindValue($cell, $value);
    // }
    public function batchSize(): int
    {
        return 10000;
    }
    public function chunkSize(): int
    {
        return 10000;
    }
}
