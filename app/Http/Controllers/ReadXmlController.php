<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\XmlData;
use SimpleXMLElement;

class ReadXmlController extends Controller
{
    public function index(Request $req)
    {
        //$xmlDataString = file_get_contents(public_path('AFACNOM_15052022_O_01_1306_prueba.xml')); // AFACNOM_15052022_O_01_1306 - copia
        
        $xmlString = file_get_contents(public_path('AFACNOM_15052022_O_01_1306_prueba.xml'));
        $xmlObject = simplexml_load_string($xmlString);
                   
        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true); 
   
        dd($phpArray);
        
        if (count($phpArray['ControlComprobante']) > 0) {
            $dataArray = array();
            foreach ($xmlObject['ControlComprobante'] as $index => $data) {
                $dataArray[] = [

                     'name' => $data['id'],
                     'category' => $data['totalregs'],
                     'price' => $data['id'],
                     'total_videos' => $data['totalregs']
                    
                ];
            }
            XmlData::insert($dataArray);
            return back()->with('success', 'Data saved successfully!');
        }
        return view('xml-data');


        
       
    }
}