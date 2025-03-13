<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StoreProblem extends Controller
{
    private $apiUrl = 'https://script.google.com/macros/s/AKfycbwA9a2WY0v2D0K77N8nCVQXAevMQKKnZee6q7UDs8ggwDfaaMCP4JDc6QqXI3fOEvc/exec';

    public function index()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read8']);
        $data = json_decode($response->body(), true);
        return view('admin.storeproblem', compact('data'));
    }
    public function storedata()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read8']);
        $data = json_decode($response->body(), true);
        return view('admin.addstoreproblem', compact('data'));
    }
    public function store(Request $request)
    {
        Http::post($this->apiUrl, [
            'action' => 'create8',
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
        return redirect()->route('storeproblem.index')->with('success', 'Record Added');
    }

    public function edit($row)
    {
        $response = Http::post($this->apiUrl, ['action' => 'read8']);
        $data = json_decode($response->body(), true);

        if (!isset($data[$row - 1])) {
            return redirect()->route('admin.storeproblem')->with('error', 'Record not found.');
        }

        $record = $data[$row - 1]; // Get specific row
        return view('admin.editstoreproblem', compact('record', 'row'));
    }

    public function update(Request $request, $row)
    {
        Http::post($this->apiUrl, [
            'action' => 'update8',
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

        return redirect()->route('storeproblem.index')->with('success', 'Record Updated');
    }

    public function toggleStatus($row)
    {
        $response = Http::post($this->apiUrl, [
            'action' => 'toggle_status8',
            'row' => $row,
        ]);
        return redirect()->route('storeproblem.index')->with('success', 'Status Updated');
    }
}