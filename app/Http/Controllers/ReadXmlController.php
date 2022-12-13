<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\XmlData;
use SimpleXMLElement;

class ReadXmlController extends Controller
{
    public function index(Request $req)
    {
        $xmlDataString = file_get_contents(public_path('AFACNOM_15052022_O_01_1306 - prueba.xml')); // AFACNOM_15052022_O_01_1306 - copia
        // $xmlObject = simplexml_load_string($xmlDataString);

        // $factura = simplexml_load_string($xmlObject);
        // $namespaces = $xmlObject->getNamespaces(true);
        // $xmlObject->registerXPathNamespace('c', $namespaces['cfdi']);

        // foreach ($xmlObject->xpath('//cfdi:Comprobante') as $m) {
        //     echo ($m['Certificado'] . " <br/>");
        //     echo ($m['Serie'] . " <br/>");
        //     echo ($m['SubTotal'] . " <br/>");
        //     echo ($m['TipoDeComprobante'] . " <br/>");
        //     echo ($m['Total'] . " <br/>");
        //     echo ($m['Version'] . " <br/>");
        // }

        // $list = $xmlObject->ControlComprobante;
        // for ($i = 0; $i < count($list); $i++) {
        //     echo '<b>Num:</b> ' . $list[$i]->attributes()->Num . '<br>';
        //     echo 'id: ' . $list[$i]->attributes()->id . '<br>';        
        // }

        // foreach ($xmlObject->ControlComprobante as $nodo) {
        //     $atributos = $nodo->attributes();
        //     echo "atributo Num --> " . $atributos['Num'] . ", atributo id --> " . $atributos['id'] . "<br>";
        // }

        // foreach ($xmlObject->xpath('/PaqueteNomina/ControlComprobante') as $course) {
        //     echo '<h2>' . $course->reference->__toString() . '</h2>';
        
                //     foreach ($course->xpath('xmlComp/Comprobante') as $course) {
        //         echo $course->__toString();
        //     }
        // }

        // $xmlDataString = file_get_contents('AFACNOM_15052022_O_01_1306 - copia.xml');
        $xmlObject = new SimpleXMLElement($xmlDataString);
        // foreach ($xmlObject->children() as $index) {
        //     dd($xmlObject);
        //     // echo '<pre>';
        //     // print_r($index);
        // }

    //     foreach ($xmlObject->children('cfdi:Conceptos', 'cfdi:Concepto') as $index) {
    //     dd($index);
    // }

        $json = json_encode($xmlObject);
        $phpDataArray = json_decode($json, true);
        dd($phpDataArray);
        // echo '<pre>';
        // print_r($phpDataArray);

        // if (count($phpDataArray['ControlComprobante']) > 0) {
        //     $dataArray = array();
        //     foreach ($phpDataArray['ControlComprobante'] as $index => $data) {
        //         $dataArray[] = [
        //             // 'name' => $data['name'],
        //             // 'category' => $data['category'],
        //             // 'price' => $data['price'],
        //             // 'total_videos' => $data['videos']
        //             // ---------------
        //             // 'id' => $data['id'],
        //             // 'totalregs' => $data['totalregs'],
        //             'Num' => $data['Num'],
        //             'id2' => $data['id2'],
        //             'Certificado' => $data['Certificado'],
        //             'Descuento' => $data['Descuento'],
        //             'Fecha' => $data['Fecha'],
        //             'Folio' => $data['Folio'],
        //             'FormaPago' => $data['FormaPago'],
        //             'LugarExpedicion' => $data['LugarExpedicion'],
        //             'MetodoPago' => $data['MetodoPago'],
        //             'Moneda' => $data['Moneda'],
        //             'NoCertificado' => $data['NoCertificado'],
        //             'Sello' => $data['Sello'],
        //             'Serie' => $data['Serie'],
        //             'SubTotal' => $data['SubTotal'],
        //             'TipoDeComprobante' => $data['TipoDeComprobante'],
        //             'Total' => $data['Total'],
        //             'Version' => $data['Version'],
        //             'Nombre' => $data['Nombre'],
        //             'RegimenFiscal' => $data['RegimenFiscal'],
        //             'Rfc' => $data['Rfc'],
        //             'Nombre3' => $data['Nombre3'],
        //             'Rfc4' => $data['Rfc4'],
        //             'UsoCFDI' => $data['UsoCFDI'],
        //             'Cantidad' => $data['Cantidad'],
        //             'ClaveProdServ' => $data['ClaveProdServ'],
        //             'ClaveUnidad' => $data['ClaveUnidad'],
        //             'Descripcion' => $data['Descripcion'],
        //             'Descuento5' => $data['Descuento5'],
        //             'Importe' => $data['Importe'],
        //             'ValorUnitario' => $data['ValorUnitario'],
        //             'FechaFinalPago' => $data['FechaFinalPago'],
        //             'FechaInicialPago' => $data['FechaInicialPago'],
        //             'FechaPago' => $data['FechaPago'],
        //             'NumDiasPagados' => $data['NumDiasPagados'],
        //             'TipoNomina' => $data['TipoNomina'],
        //             'TotalDeducciones' => $data['TotalDeducciones'],
        //             'TotalPercepciones' => $data['TotalPercepciones'],
        //             'TotalOtrosPagos' => $data['TotalOtrosPagos'],
        //             'Version6' => $data['Version6'],
        //             'RegistroPatronal' => $data['RegistroPatronal'],
        //             'Antigüedad' => $data['Antigüedad'],
        //             'Banco' => $data['Banco'],
        //             'ClaveEntFed' => $data['ClaveEntFed'],
        //             'CuentaBancaria' => $data['CuentaBancaria'],
        //             'Curp' => $data['Curp'],
        //             'Departamento' => $data['Departamento'],
        //             'FechaInicioRelLaboral' => $data['FechaInicioRelLaboral'],
        //             'NumEmpleado' => $data['NumEmpleado'],
        //             'NumSeguridadSocial' => $data['NumSeguridadSocial'],
        //             'PeriodicidadPago' => $data['PeriodicidadPago'],
        //             'Puesto' => $data['Puesto'],
        //             'RiesgoPuesto' => $data['RiesgoPuesto'],
        //             'SalarioDiarioIntegrado' => $data['SalarioDiarioIntegrado'],
        //             'Sindicalizado' => $data['Sindicalizado'],
        //             'TipoContrato' => $data['TipoContrato'],
        //             'TipoRegimen' => $data['TipoRegimen'],
        //             'TotalExento' => $data['TotalExento'],
        //             'TotalGravado' => $data['TotalGravado'],
        //             'TotalSueldos' => $data['TotalSueldos'],
        //             'Clave' => $data['Clave'],
        //             'Concepto' => $data['Concepto'],
        //             'ImporteExento' => $data['ImporteExento'],
        //             'ImporteGravado' => $data['ImporteGravado'],
        //             'TipoPercepcion' => $data['TipoPercepcion'],
        //             'TotalImpuestosRetenidos' => $data['TotalImpuestosRetenidos'],
        //             'TotalOtrasDeducciones' => $data['TotalOtrasDeducciones'],
        //             'Clave7' => $data['Clave7'],
        //             'Concepto8' => $data['Concepto8'],
        //             'Importe9' => $data['Importe9'],
        //             'TipoDeduccion' => $data['TipoDeduccion'],
        //             'Importe10' => $data['Importe10'],
        //             'Concepto11' => $data['Concepto11'],
        //             'Clave12' => $data['Clave12'],
        //             'TipoOtroPago' => $data['TipoOtroPago'],
        //             'SubsidioCausado' => $data['SubsidioCausado'],
        //             'DiasIncapacidad' => $data['DiasIncapacidad'],
        //             'TipoIncapacidad' => $data['TipoIncapacidad'],
        //             'ImporteMonetario' => $data['ImporteMonetario'],
        //         ];
        //     }
        //     XmlData::insert($dataArray);
        //     return back()->with('success', 'Data saved successfully!');
        // }
        // return view('xml-data');
    }
}
