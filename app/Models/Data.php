<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Data extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'anio',    
    //     'mes',    
    //     'quincena'
    // --------------XML
    // 'id',
    // 'totalregs',
    // 'Num',
    // 'id2',
    // 'Certificado',
    // 'Descuento',
    // 'Fecha',
    // 'Folio',
    // 'FormaPago',
    // 'LugarExpedicion',
    // 'MetodoPago',
    // 'Moneda',
    // 'NoCertificado',
    // 'Sello',
    // 'Serie',
    // 'SubTotal',
    // 'TipoDeComprobante',
    // 'Total',
    // 'Version',
    // 'Nombre',
    // 'RegimenFiscal',
    // 'Rfc',
    // 'Nombre3',
    // 'Rfc4',
    // 'UsoCFDI',
    // 'Cantidad',
    // 'ClaveProdServ',
    // 'ClaveUnidad',
    // 'Descripcion',
    // 'Descuento5',
    // 'Importe',
    // 'ValorUnitario',
    // 'FechaFinalPago',
    // 'FechaInicialPago',
    // 'FechaPago',
    // 'NumDiasPagados',
    // 'TipoNomina',
    // 'TotalDeducciones',
    // 'TotalPercepciones',
    // 'TotalOtrosPagos',
    // 'Version6',
    // 'RegistroPatronal',
    // 'Antigüedad',
    // 'Banco',
    // 'ClaveEntFed',
    // 'CuentaBancaria',
    // 'Curp',
    // 'Departamento',
    // 'FechaInicioRelLaboral',
    // 'NumEmpleado',
    // 'NumSeguridadSocial',
    // 'PeriodicidadPago',
    // 'Puesto',
    // 'RiesgoPuesto',
    // 'SalarioDiarioIntegrado',
    // 'Sindicalizado',
    // 'TipoContrato',
    // 'TipoRegimen',
    // 'TotalExento',
    // 'TotalGravado',
    // 'TotalSueldos',
    // 'Clave',
    // 'Concepto',
    // 'ImporteExento',
    // 'ImporteGravado',
    // 'TipoPercepcion',
    // 'TotalImpuestosRetenidos',
    // 'TotalOtrasDeducciones',
    // 'Clave7',
    // 'Concepto8',
    // 'Importe9',
    // 'TipoDeduccion',
    // 'Importe10',
    // 'Concepto11',
    // 'Clave12',
    // 'TipoOtroPago',
    // 'SubsidioCausado',
    // 'Version13',
    // 'UUID',
    // 'FechaTimbrado',
    // 'RfcProvCertif',
    // 'SelloCFD',
    // 'NoCertificadoSAT',
    // 'SelloSAT'
    // ];
    public $timestamps = false;

    
}
