<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Camera extends Controller
{
    private $apiUrl = 'https://script.google.com/macros/s/AKfycbwzbkNu6pYMCkodeuXzf_Ff9_scmcyrlLDRjblQC0-7hUam1hNrLjEO3oM8HKiDMQs/exec';

    public function index()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read4']);
        $data = json_decode($response->body(), true);
        return view('admin.camera', compact('data'));
    }
    public function storedata()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read4']);
        $data = json_decode($response->body(), true);
        return view('admin.addcamera', compact('data'));
    }
    public function store(Request $request)
    {
        Http::post($this->apiUrl, [
            'action' => 'create4',
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
        return redirect()->route('camera.index')->with('success', 'Record Added');
    }

    public function edit($row)
    {
        $response = Http::post($this->apiUrl, ['action' => 'read4']);
        $data = json_decode($response->body(), true);

        if (!isset($data[$row - 1])) {
            return redirect()->route('admin.camera')->with('error', 'Record not found.');
        }

        $record = $data[$row - 1]; // Get specific row
        return view('admin.editcamera', compact('record', 'row'));
    }

    public function update(Request $request, $row)
    {
        Http::post($this->apiUrl, [
            'action' => 'update4',
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

        return redirect()->route('camera.index')->with('success', 'Record Updated');
    }

    public function toggleStatus($row)
    {
        $response = Http::post($this->apiUrl, [
            'action' => 'toggle_status4',
            'row' => $row,
        ]);
        return redirect()->route('camera.index')->with('success', 'Status Updated');
    }
}