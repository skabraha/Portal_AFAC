<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\XmlData;

class ReadXmlController extends Controller
{
    public function index(Request $req)
    {
        $xmlDataString = file_get_contents(public_path('sample-course.xml'));
        $xmlObject = simplexml_load_string($xmlDataString);

        $json = json_encode($xmlObject);
        $phpDataArray = json_decode($json, true);

        // echo '<pre>';
        // print_r($phpDataArray);

        if (count($phpDataArray['course']) > 0) {

            $dataArray = array();

            foreach ($phpDataArray['course'] as $index => $data) {

                $dataArray[] = [
                    'name' => $data['name'],
                    'category' => $data['category'],
                    'price' => $data['price'],
                    'total_videos' => $data['videos']
                    // ---------------
                    // 'id' => $data['id'],
                    // 'totalregs' => $data['totalregs'],
                    // 'Num' => $data['Num'],
                    // 'id2' => $data['id2'],
                    // 'Certificado' => $data['Certificado'],
                    // 'Descuento' => $data['Descuento'],
                    // 'Fecha' => $data['Fecha'],
                    // 'Folio' => $data['Folio'],
                    // 'FormaPago' => $data['FormaPago'],
                    // 'LugarExpedicion' => $data['LugarExpedicion'],
                    // 'MetodoPago' => $data['MetodoPago'],
                    // 'Moneda' => $data['Moneda'],
                    // 'NoCertificado' => $data['NoCertificado'],
                    // 'Sello' => $data['Sello'],
                    // 'Serie' => $data['Serie'],
                    // 'SubTotal' => $data['SubTotal'],
                    // 'TipoDeComprobante' => $data['TipoDeComprobante'],
                    // 'Total' => $data['Total'],
                    // 'Version' => $data['Version'],
                    // 'Nombre' => $data['Nombre'],
                    // 'RegimenFiscal' => $data['RegimenFiscal'],
                    // 'Rfc' => $data['Rfc'],
                    // 'Nombre3' => $data['Nombre3'],
                    // 'Rfc4' => $data['Rfc4'],
                    // 'UsoCFDI' => $data['UsoCFDI'],
                    // 'Cantidad' => $data['Cantidad'],
                    // 'ClaveProdServ' => $data['ClaveProdServ'],
                    // 'ClaveUnidad' => $data['ClaveUnidad'],
                    // 'Descripcion' => $data['Descripcion'],
                    // 'Descuento5' => $data['Descuento5'],
                    // 'Importe' => $data['Importe'],
                    // 'ValorUnitario' => $data['ValorUnitario'],
                    // 'FechaFinalPago' => $data['FechaFinalPago'],
                    // 'FechaInicialPago' => $data['FechaInicialPago'],
                    // 'FechaPago' => $data['FechaPago'],
                    // 'NumDiasPagados' => $data['NumDiasPagados'],
                    // 'TipoNomina' => $data['TipoNomina'],
                    // 'TotalDeducciones' => $data['TotalDeducciones'],
                    // 'TotalPercepciones' => $data['TotalPercepciones'],
                    // 'TotalOtrosPagos' => $data['TotalOtrosPagos'],
                    // 'Version6' => $data['Version6'],
                    // 'RegistroPatronal' => $data['RegistroPatronal'],
                    // 'Antigüedad' => $data['Antigüedad'],
                    // 'Banco' => $data['Banco'],
                    // 'ClaveEntFed' => $data['ClaveEntFed'],
                    // 'CuentaBancaria' => $data['CuentaBancaria'],
                    // 'Curp' => $data['Curp'],
                    // 'Departamento' => $data['Departamento'],
                    // 'FechaInicioRelLaboral' => $data['FechaInicioRelLaboral'],
                    // 'NumEmpleado' => $data['NumEmpleado'],
                    // 'NumSeguridadSocial' => $data['NumSeguridadSocial'],
                    // 'PeriodicidadPago' => $data['PeriodicidadPago'],
                    // 'Puesto' => $data['Puesto'],
                    // 'RiesgoPuesto' => $data['RiesgoPuesto'],
                    // 'SalarioDiarioIntegrado' => $data['SalarioDiarioIntegrado'],
                    // 'Sindicalizado' => $data['Sindicalizado'],
                    // 'TipoContrato' => $data['TipoContrato'],
                    // 'TipoRegimen' => $data['TipoRegimen'],
                    // 'TotalExento' => $data['TotalExento'],
                    // 'TotalGravado' => $data['TotalGravado'],
                    // 'TotalSueldos' => $data['TotalSueldos'],
                    // 'Clave' => $data['Clave'],
                    // 'Concepto' => $data['Concepto'],
                    // 'ImporteExento' => $data['ImporteExento'],
                    // 'ImporteGravado' => $data['ImporteGravado'],
                    // 'TipoPercepcion' => $data['TipoPercepcion'],
                    // 'TotalImpuestosRetenidos' => $data['TotalImpuestosRetenidos'],
                    // 'TotalOtrasDeducciones' => $data['TotalOtrasDeducciones'],
                    // 'Clave7' => $data['Clave7'],
                    // 'Concepto8' => $data['Concepto8'],
                    // 'Importe9' => $data['Importe9'],
                    // 'TipoDeduccion' => $data['TipoDeduccion'],
                    // 'Importe10' => $data['Importe10'],
                    // 'Concepto11' => $data['Concepto11'],
                    // 'Clave12' => $data['Clave12'],
                    // 'TipoOtroPago' => $data['TipoOtroPago'],
                    // 'SubsidioCausado' => $data['SubsidioCausado'],
                    // 'DiasIncapacidad' => $data['DiasIncapacidad'],
                    // 'TipoIncapacidad' => $data['TipoIncapacidad'],
                    // 'ImporteMonetario' => $data['ImporteMonetario'],
                ];
            }

            XmlData::insert($dataArray);

            return back()->with('success', 'Data saved successfully!');
        }
        return view('xml-data');
    }
}
