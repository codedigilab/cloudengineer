<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Stock extends Controller
{
    private $apiUrl = 'https://script.google.com/macros/s/AKfycbwA9a2WY0v2D0K77N8nCVQXAevMQKKnZee6q7UDs8ggwDfaaMCP4JDc6QqXI3fOEvc/exec';

    public function index()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read2']);
        $data = json_decode($response->body(), true);
        return view('admin.stock', compact('data'));
    }
    public function storedata()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read2']);
        $data = json_decode($response->body(), true);
        return view('admin.addstock', compact('data'));
    }
    public function store(Request $request)
    {
        Http::post($this->apiUrl, [
            'action' => 'create2',
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
        return redirect()->route('stock.index')->with('success', 'Record Added');
    }

    public function edit($row)
    {
        $response = Http::post($this->apiUrl, ['action' => 'read2']);
        $data = json_decode($response->body(), true);

        if (!isset($data[$row - 1])) {
            return redirect()->route('admin.stock')->with('error', 'Record not found.');
        }

        $record = $data[$row - 1]; // Get specific row
        return view('admin.editstock', compact('record', 'row'));
    }

    public function update(Request $request, $row)
    {
        Http::post($this->apiUrl, [
            'action' => 'update2',
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

        return redirect()->route('stock.index')->with('success', 'Record Updated');
    }

    public function toggleStatus($row)
    {
        $response = Http::post($this->apiUrl, [
            'action' => 'toggle_status2',
            'row' => $row,
        ]);
        return redirect()->route('stock.index')->with('success', 'Status Updated');
    }
}