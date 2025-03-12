<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaptopDetails extends Controller
{
    private $apiUrl = 'https://script.google.com/macros/s/AKfycbxXYCuThyTu5r7olblp7ViGeUOSzhaNt6ZeGTPwpo8vkcg_Ayz-wNV555Mfc3PvZ77r/exec';
   
    public function index()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read']);
        $data = json_decode($response->body(), true);
        return view('admin.laptopdetails', compact('data'));
    }

    public function store(Request $request)
    {
        Http::post($this->apiUrl, [
            'action' => 'create',
            'laptoptype' => $request->laptoptype,
            'empcode' => $request->empcode,
            'empemailid' => $request->empemailid,
            'contactnumber' => $request->contactnumber,
            'employname' => $request->employname,
            'designation' => $request->designation,
            'deviceidname' => $request->deviceidname,
            'adopterno' => $request->adopterno,
            'adapterbrand' => $request->adapterbrand,
            'productid' => $request->productid,
            'laptopmodel' => $request->laptopmodel,
            'extra' => $request->extra,   
        ]);
        return redirect()->back()->with('success', 'Record Added');
    }

    public function edit($row)
    {
        $response = Http::post($this->apiUrl, ['action' => 'read']);
        $data = json_decode($response->body(), true);

        if (!isset($data[$row - 1])) {
            return redirect()->route('admin.laptopdetails')->with('error', 'Record not found.');
        }

        $record = $data[$row - 1]; // Get specific row
        return view('admin.editlaptopdetails', compact('record', 'row'));
    }

    public function update(Request $request, $row)
    {
        Http::post($this->apiUrl, [
            'action' => 'update',
            'row' => $row,
            'laptoptype' => $request->laptoptype,
            'empcode' => $request->empcode,
            'empemailid' => $request->empemailid,
            'contactnumber' => $request->contactnumber,
            'employname' => $request->employname,
            'designation' => $request->designation,
            'deviceidname' => $request->deviceidname,
            'adopterno' => $request->adopterno,
            'adapterbrand' => $request->adapterbrand,
            'productid' => $request->productid,
            'laptopmodel' => $request->laptopmodel,
            'extra' => $request->extra,            
        ]);

        return redirect()->route('laptopdetails.index')->with('success', 'Record Updated');
    }

    public function toggleStatus($row)
    {
        $response = Http::post($this->apiUrl, [
            'action' => 'toggle_status',
            'row' => $row,
        ]);
        return redirect()->route('laptopdetails.index')->with('success', 'Status Updated');
    }
}