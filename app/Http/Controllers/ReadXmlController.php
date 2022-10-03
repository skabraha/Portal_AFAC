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

        // echo "<pre>";
        // print_r($phpDataArray);

        if (count($phpDataArray['course']) > 0) {

            $dataArray = array();

            foreach ($phpDataArray['course'] as $index => $data) {

                $dataArray[] = [
                    "name" => $data['name'],
                    "category" => $data['category'],
                    "price" => $data['price'],
                    "total_videos" => $data['videos']
                ];
            }

            XmlData::insert($dataArray);

            return back()->with('success','Data saved successfully!');
        }
        return view("xml-data");
    }
}
