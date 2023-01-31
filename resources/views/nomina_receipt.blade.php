<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECIBO DE NOMINA</title>
    <link rel="shortcut icon" href="" />
</head>
<style>
    @page {
        margin: 0cm 0cm;
    }
    
    body {
        margin-top: 0.1cm;
        margin-left: 1cm;
        margin-right: 1cm;
        margin-bottom: 0.1cm;
        font-family: 'Montserrat-Light';
    }
    
    table {
        font-family: 'Montserrat';
        border-collapse: collapse;
        border-color: gray;
        width: 100%;
        border: black .5px solid;
    }
    
    tbody {
        border: black 1px solid;
    }
    
    tr {
        border: black 1px solid;
        line-height:7px;
    }
    
    th {
        border: black 1px solid;
        text-align: left;
        padding: 4px;
        font-size: 25px;
        background-color: #D8D8D8;
        color: black;
        text-align: center;
    }
    
    td {
        border: black 1px solid;
        text-align: left;
        padding: 2px;
        font-size: 20px;
        word-wrap:break-word;
    }
    
    .imagen2 {
        padding-left: 87%;
        padding-top: -5%;
    }
    
</style>
<body>
    <div style="padding-left:0.5%;padding-top:2%">
        <table style="font-size=10px">
            <tr>
                <th height="" width="200px" ROWSPAN="9" style="font-size:14px;text-align:center;background-color:#FFFFFF">
                    <img src="{{public_path('images/logoafac.png')}}" width="189" height="70" alt="">
                </th>
                <th width="250px" style="font-size:10px;text-align:center;">EMISOR</th>
                <th width="850px" COLSPAN="4" style="font-size:10px;text-align:center;">COMPROBANTE DE NOMINA</th>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;">RFC: {{$resultQuerys[0]->Rfc}}</td>
                <td style="font-size:8px;text-align:left;">VERSION: {{$resultQuerys[0]->Version}}</td>
                <td style="font-size:8px;text-align:left;">TIPO DE COMPROBANTE: {{$resultQuerys[0]->TipoDeComprobante}}</td>
                <td style="font-size:8px;text-align:left;border-right:black">EXPORTACION</td>
                <td style="font-size:8px;text-align:left;">FECHA: {{$resultQuerys[0]->Fecha}}</td>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;">NOMBRE: {{$resultQuerys[0]->Nombre}}</td>
                <td style="font-size:8px;text-align:left;">SERIE: {{$resultQuerys[0]->Serie}}</td>
                <td style="font-size:8px;text-align:left;">METODO PAGO: {{$resultQuerys[0]->MetodoPago}}</td>
                <td style="font-size:8px;text-align:left;">MONEDA: {{$resultQuerys[0]->Moneda}}</td>
                <td style="font-size:8px;text-align:left;">CONFIRMACION</td>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;">REGIMEN FISCAL: {{$resultQuerys[0]->RegimenFiscal}}</td>
                <td style="font-size:8px;text-align:left;">FOLIO: {{$resultQuerys[0]->Folio}}</td>
                <td style="font-size:8px;text-align:left;">SUBTOTAL: {{$resultQuerys[0]->SubTotal}}</td>
                <td style="font-size:8px;text-align:left;">DESCUENTO: {{$resultQuerys[0]->Descuento}}</td>
                <td style="font-size:8px;text-align:left;">TOTAL: {{$resultQuerys[0]->Total}}</td>
            </tr>
            <tr>
                <td rowspan="3" style="font-size:8px;text-align:left;border-top: white 1px solid; border-bottom:white 1px solid"> </td>
                <td style="font-size:8px;text-align:left;">LUGAR DE EXPEDICION: {{$resultQuerys[0]->LugarExpedicion}} </td>
                <td colspan="3" style="font-size:8px;text-align:left;">No. CERTIFICADO: </td>
            </tr>
            <tr>
                <td colspan="4" style="font-size:7px;text-align:left;">SELLO: {{$resultQuerys[0]->Sello}} </td>
            </tr>
            <tr>
                <td colspan="4" style="font-size:8px;text-align:left;">CERTIFICADO: {{--$resultQuerys[0]->Certificado--}}</td>
            </tr>
            <tr>
                <th style="font-size:8px;text-align:center;">CFDI RELACIONADOS </th>
                <th COLSPAN="4" style="font-size:8px;text-align:center;">CFDI RELACIONADOS </th>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;">TIPO RELACION</td>
                <td COLSPAN="4" style="font-size:8px;text-align:left;">UUID</td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="6" style="font-size:10px;text-align:center;">RECEPTOR</th>
            </tr>
            <tr>
                <td colspan="1" style="font-size:8px;text-align:left;">RFC: {{$resultQuerys[0]->Rfc4}}</td>
                <td colspan="1" style="font-size:8px;text-align:left;">NOMBRE: {{$resultQuerys[0]->Nombre3}}</td>
                <td colspan="4" style="font-size:8px;text-align:left;">DOMICILIO FISCAL RECEPTOR</td>
            </tr>
            <tr>
                <td colspan="1" style="font-size:8px;text-align:left;">REGIMEN FISCAL: {{$resultQuerys[0]->RegimenFiscal}}</td>
                <td colspan="1" style="font-size:8px;text-align:left;">USO CFDI: {{$resultQuerys[0]->UsoCFDI}}</td>
                <td colspan="4" style="font-size:8px;text-align:left;"></td>
               </tr>
            <tr>
                <th colspan="6" style="font-size:10px;text-align:center;">CONCEPTOS</th>
            </tr>
        </table>
        <table>
            <tr>
                <th ROWSPAN="2" style="vertical-align: middle;font-size:10px;text-align:center;background-color:#FFFFFF">CLAVE DE PRODUCTO O SERVICIO: {{$resultQuerys[0]->ClaveProdServ}}</th>
                <td style="font-size:8px;text-align:center;">CANTIDAD: {{$resultQuerys[0]->Cantidad}}</td>
                <td style="font-size:8px;text-align:center;">CLAVE UNIDAD: {{$resultQuerys[0]->ClaveUnidad}}</td>
                <td style="font-size:8px;text-align:center;">DESCRIPCION: {{$resultQuerys[0]->Descripcion}} </td>
                <td style="font-size:8px;text-align:center;">VALOR UNITARIO: {{$resultQuerys[0]->ValorUnitario}} </td>
                <td style="font-size:8px;text-align:center;">IMPORTE: {{$resultQuerys[0]->Importe}}</td>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:center;">0</td>
                <td style="font-size:8px;text-align:center;">DESCUENTO: {{$resultQuerys[0]->Descuento}}</td>
                <td style="font-size:8px;text-align:center;">0</td>
                <td style="font-size:8px;text-align:center;">OBJETO IMPUESTO</td>
                <td style="font-size:8px;text-align:center;">0</td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="5" style="font-size:10px;text-align:center;">COMPLEMENTO NOMINA</th>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;  border-top: white 1px solid; border-bottom:white 1px solid">VERSION: {{$resultQuerys[0]->Version}}</td>
                <td style="font-size:8px;text-align:left; border-top: white 1px solid; border-bottom:white 1px solid">No. DIAS PAGADOS: {{$resultQuerys[0]->NumDiasPagados}}</td>
                <td style="font-size:8px;text-align:left;  border-top: white 1px solid; border-bottom:white 1px solid">TIPO NOMINA: {{$resultQuerys[0]->TipoNomina}}</td>
                <td style="font-size:8px;text-align:left; border-top: white 1px solid; border-bottom:white 1px solid">TOTAL DE PERCEPCIONES: {{$resultQuerys[0]->TotalPercepciones}}</td>
                <td style="font-size:8px;text-align:left;  border-top: white 1px solid; border-bottom:white 1px solid">FECHA PAGO: {{$date->format('d/m/Y')}}</td>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left; border-top: white 1px solid; border-bottom:white 1px solid">TOTAL DE PERCEPCIONES: {{$resultQuerys[0]->TotalPercepciones}}</td>
                <td style="font-size:8px;text-align:left;  border-top: white 1px solid; border-bottom:white 1px solid">FECHA INICIAL PAGO: {{$resultQuerys[0]->FechaInicialPago}}</td>
                <td style="font-size:8px;text-align:left; border-top: white 1px solid; border-bottom:white 1px solid">TOTAL OTROS PAGOS: {{$resultQuerys[0]->TotalOtrosPagos}}</td>
                <td style="font-size:8px;text-align:left;  border-top: white 1px solid;border-bottom:white 1px solid">FECHA FINAL PAGO: {{$resultQuerys[0]->FechaFinalPago}}</td>
                <td style="font-size:8px;text-align:left; border-top: white 1px solid;border-bottom:white 1px solid"></td>
            </tr>
        </table>
        <table>
            <tr>
                <th height="1" width="22.82%" colspan="1" style="font-size:10px;text-align:center;border: black 1px solid;">EMISOR</th>
                <th height="1" width="77.2%" colspan="4" style="font-size:10px;text-align:center;">RECEPTOR</th>
            </tr>
            <tr>
                <td rolspan="4" style="font-size:9px;text-align:left;border-top: white 1px solid; border-bottom:white 1px solid">REGISTRO PATRONAL: {{$resultQuerys[0]->RegistroPatronal}}</td>
                <td style="font-size:8px;text-align:left;">CURP: {{$resultQuerys[0]->Curp}}</td>
                <td style="font-size:8px;text-align:left;">SINDICALIZADO: {{$resultQuerys[0]->Sindicalizado}}</td>
                <td style="font-size:8px;text-align:left;">No. EMPLEADO: {{$resultQuerys[0]->NumEmpleado}}</td>
                <td style="font-size:7px;text-align:left;">SALARIO BASE DE COTIZACION APORT</td>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td style="font-size:8px;text-align:left;">No. SEGURIDAD SOCIAL: {{$resultQuerys[0]->NumSeguridadSocial}}</td>
                <td style="font-size:8px;text-align:left;">TIPO JORNADA</td>
                <td style="font-size:8px;text-align:left;">DEPARTAMENTO {{$resultQuerys[0]->Departamento}}</td>
                <td style="font-size:8px;text-align:left;">S.D.I</td>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td style="font-size:8px;text-align:left;">FECHA INICIO RELACION LABORAL: {{$resultQuerys[0]->FechaInicioRelLaboral}}</td>
                <td style="font-size:8px;text-align:left;">TIPO REGIMEN: {{$resultQuerys[0]->tipoRegimen}}</td>
                <td style="font-size:8px;text-align:left;">PUESTO: {{$resultQuerys[0]->Puesto}}</td>
                <td style="font-size:8px;text-align:left;">CLAVE DE ENTIDAD FEDERATIVA: {{$resultQuerys[0]->ClaveEntFed}}</td>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td style="font-size:8px;text-align:left;">ANTIGÜEDAD: {{$resultQuerys[0]->Antigüedad}}</td>
                <td style="font-size:8px;text-align:left;">BANCO: {{$resultQuerys[0]->Banco}}</td>
                <td style="font-size:8px;text-align:left;">NIVEL TABULAR</td>
                <td style="font-size:8px;text-align:left;">RIESGO DE PUESTO: {{$resultQuerys[0]->RiesgoPuesto}}</td>
            </tr>
            <tr>
                <td style="font-size:8px;text-align:left;border-top: white 1px solid;  border-top: white 1px solid;"></td>
                <td style="font-size:8px;text-align:left;">TIPO DE CONTRATO: {{$resultQuerys[0]->TipoContrato}}</td>
                <td style="font-size:8px;text-align:left;">CUENTA BANCARIA: {{$resultQuerys[0]->CuentaBancaria}}</td>
                <td style="font-size:8px;text-align:left;">PERIODICIDAD PAGO: {{$resultQuerys[0]->PeriodicidadPago}}</td>
                <td style="font-size:8px;text-align:left;"></td>
            </tr>
        </table>
        <table>
            <tr>
                <th height="1" width="50%" height="3" colspan="5" style="font-size:10px;text-align:center;border: black 1px solid;">PERCEPCION</th>
                <th height="1" width="50%" height="3" colspan="4" style="font-size:10px;text-align:center;">DEDUCCIONES</th>
            </tr>
            <tr>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">Percepción</td>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">clave</td>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">Concepto</td>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">imp.gravado</td>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">imp.Exento</td>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">Tipo Deducción</td>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">clave</td>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">Concepto</td>
                <td style="font-size:10px;text-align:center;border: black 1px solid;">Importe</td>
            </tr>
            @foreach ($resultpersp as $resultpersps)
            <tr>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->type_p}}</td>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->key_p}}</td>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->concept_p}}</td>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->imp_gravado}}</td>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->imp_exento}}</td>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->requestdeduction->type_d}}</td>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->requestdeduction->key_d}}</td>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->requestdeduction->concept_d}}</td>
                <td style="font-size:10px;text-align:center;border-bottom:white 1px solid">{{$resultpersps->requestdeduction->importe_d}}</td>
            </tr>
            @endforeach
           
        </table>
        <table>
            <tr>
                <th width="50%"  colspan="5" style="font-size:10px;text-align:center;border: black 1px solid;">OTROS PAGOS: {{$resultQuerys[0]->TotalOtrosPagos}}</th>
                <th width="50%"  colspan="5" style="font-size:10px;text-align:center;">SUBSIDIO AL EMPLEO</th>
            </tr>
            <tr>
                <td height="1" colspan="7" style="font-size:8px;text-align:center;">OTRO PAGO</td>
                <td height="1" colspan="5" style="font-size:8px;text-align:left;">SUBSIDIO CAUSADO</td>
            </tr>
            <tr>
                <td height="1" colspan="2" style="font-size:7px;text-align:center;border-bottom:white 1px solid">CLAVE</td>
                <td height="1" colspan="3" style="font-size:7px;text-align:center;border-bottom:white 1px solid">CONCEPTO</td>
                <td height="1" colspan="2" style="font-size:7px;text-align:center;border-bottom:white 1px solid">IMPORTE</td>
                <th height="1" colspan="5" style="font-size:8px;text-align:center;">COMPENSACION SALDOS A FAVOR </th>
            </tr>
            <tr>
                <td height="1" colspan="7" style="font-size:8px;text-align:center;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td height="1" colspan="5" style="font-size:8px;text-align:left;">SALDO A FAVOR</td>
            </tr>
            <tr>
                <td height="1" colspan="7" style="font-size:7px;text-align:center;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td height="1" colspan="5" style="font-size:7px;text-align:left;">AÑO</td>
            </tr>
            <tr>
                <td height="1" colspan="7" style="font-size:7px;text-align:center;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td height="1" colspan="5" style="font-size:7px;text-align:left;">REMANENTE SALDO A FAVOR </td>
            </tr>
            <tr>
                <td height="1" colspan="7" style="font-size:8px;text-align:center;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <th colspan="3" colspan="5"width="50%" height="3" style="font-size:8px;text-align:center;">INCAPACIDADES</th>
            </tr>
            <tr>
                <td colspan="7" style="font-size:7px;text-align:center;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td height="1" colspan="5" style="font-size:7px;text-align:left;">INCAPACIDADES</td>
            </tr>
            <tr>
                <td colspan="7" height="1" style="font-size:7px;text-align:center;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td height="1" colspan="5" style="font-size:7px;text-align:left;">DIAS DE INCAPACIDAD: {{$resultQuerys[0]->DiasIncapacidad}}</td>
            </tr>
            <tr>
                <td colspan="7" height="1" style="font-size:7px;text-align:center;border-top: white 1px solid; border-bottom:white 1px solid"></td>
                <td height="1" colspan="5" style="font-size:7px;text-align:left;">TIPO DE INCAPACIDAD: {{$resultQuerys[0]->TipoIncapacidad}}</td>
            </tr>
            <tr>
                <td colspan="7" height="1" style="font-size:7px;text-align:center;"></td>
                <td height="1" colspan="5" style="font-size:7px;text-align:left;">IMPORTE MONETARIO: {{$resultQuerys[0]->ImporteMonetario}} </td>
            </tr>

        </table>
    </div>
</body>
</html>